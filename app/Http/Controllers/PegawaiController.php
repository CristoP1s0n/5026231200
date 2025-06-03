// app/Http/Controllers/PegawaiController.php
namespace App\Http\Controllers;

use App\Models\Pegawai; // Import model Pegawai
use Illuminate\Http\Request; // Import Request

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource. (MENAMPILKAN DATA)
     */
    public function index()
    {
        $pegawai = Pegawai::orderBy('nama', 'asc')->paginate(10); // Ambil semua data pegawai, urutkan berdasarkan nama, paginasi 10 data per halaman
        return view('pegawai.index', compact('pegawai')); // Kirim data ke view pegawai.index
    }

    /**
     * Show the form for creating a new resource. (FORM MEMASUKAN DATA)
     */
    public function create()
    {
        return view('pegawai.create'); // Tampilkan view pegawai.create
    }

    /**
     * Store a newly created resource in storage. (PROSES MEMASUKAN DATA)
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'umur' => 'required|integer|min:18',
            'alamat' => 'required|string',
        ]);

        // Simpan data ke database
        Pegawai::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('pegawai.index')
                         ->with('success', 'Data pegawai berhasil ditambahkan.');
    }

    /**
     * Display the specified resource. (OPSIONAL: TAMPILKAN DETAIL DATA)
     * Biasanya tidak selalu digunakan jika sudah ada edit
     */
    public function show(Pegawai $pegawai) // Route Model Binding
    {
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource. (FORM UPDATE DATA)
     */
    public function edit(Pegawai $pegawai) // Route Model Binding
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage. (PROSES UPDATE DATA)
     */
    public function update(Request $request, Pegawai $pegawai) // Route Model Binding
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'umur' => 'required|integer|min:18',
            'alamat' => 'required|string',
        ]);

        // Update data di database
        $pegawai->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('pegawai.index')
                         ->with('success', 'Data pegawai berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage. (PROSES MENGHAPUS DATA)
     */
    public function destroy(Pegawai $pegawai) // Route Model Binding
    {
        $pegawai->delete();

        return redirect()->route('pegawai.index')
                         ->with('success', 'Data pegawai berhasil dihapus.');
    }
}
