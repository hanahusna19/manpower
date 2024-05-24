
<div class="container-fluid">

              <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-1">
                                              Verifikasi </div>
                                            <p>Berikut ini adalah tabel pengajuan yang mencakup berbagai jenis permohonan yang telah diajukan, status pengajuan, dan tanggal pengajuan.
                                            Harap diperhatikan bahwa informasi ini bertujuan untuk memberikan transparansi dan memudahkan pemantauan proses pengajuan yang sedang berjalan. Berikut adalah tabel yang dimaksud:
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-lg m-0 font-weight-bold text-dark">Tabel Verifikasi </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                <th>Id</th>
                <th>Tanggal pengajuan</th>
                <th>Pengajuan</th>
                <th>Jenis Pengajuan</th>
                <th>Periode Awal</th>
                <th>Periode Akhir</th>
                <th>Status Pengajuan</th>
              </tr>
              
            </thead>
            <tbody>
              <tr class="text-center">
                <td>#2134</td>
                <td>23-04-2022</td>
                <td>Unit Kerja</td>
                <td>Pegawai Peganti</td>
                <td>23-04-2022</td>
                <td>23-04-2023</td>
          <td>
          <?php
            if (isset($rowData['diterima']) && $rowData['diterima'] === true) {
                echo '<span class="badge bg-success">Approved</span>';
            } elseif (isset($rowData['ditolak']) && $rowData['ditolak'] === false) {
                echo '<span class="badge bg-danger">Rejected</span>';
            }
            ?>
            <button type="button" class="btn btn-outline-success btn-xs" id="terima" name="terima"><i class= "fas fa-user-check"></i></button>
            <button type="button" class="btn btn-outline-danger btn-xs" id="tolak" name="tolak"><i class= " fas fa-user-times"></i></button>
          </td>
        </tr>

        <tr class="text-center">
          <td>#2132</td>
          <td>23-01-2022</td>
          <td>Unit Kerja</td>
          <td>Pegawai Peganti</td>
          <td>23-04-2022</td>
          <td>23-04-2023</td>
          <td>
            <button type="button" class="btn btn-outline-success btn-xs approve-btn" id="diterima" name="diterima"><i class= "fas fa-user-check"></i></button>
            <button type="button" class="btn btn-outline-danger btn-xs reject-btn" id="ditolak" name="ditolak"><i class= " fas fa-user-times"></i></button>
          </td>
        </tr>
        <tr class="text-center">
          <td>#2145</td>
          <td>23-08-2022</td>
          <td>Unit Kerja</td>
          <td>Pegawai Baru</td>
          <td>23-04-2022</td>
          <td>23-04-2023</td>
          <td>
            <button type="button" class="btn btn-outline-success btn-xs"><i class= "fas fa-user-check"></i></button>
            <button type="button" class="btn btn-outline-danger btn-xs"><i class= " fas fa-user-times"></i></button>
          </td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>
                        </div>
            
                    </div>
</div>


<!-- SCRIPT -->

<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get all approve buttons
            const approveButtons = document.querySelectorAll('.approve-btn');
            // Get all reject buttons
            const rejectButtons = document.querySelectorAll('.reject-btn');

            // Function to handle approve action
            function handleApprove(event) {
                // Here, you can implement your logic for approving the item
                // For demonstration, let's just display a simple confirmation dialog
                const confirmApprove = confirm("Yakin Menyetujui Pengajuan Tersebut?");
                if (confirmApprove) {
                    // User confirmed, you can perform further actions here
                    console.log("diterima");
                    // Change the button to a badge
                    const button = event.target;
                    button.outerHTML = '<span class="badge badge-success">Diterima</span>';

                    // Hide the reject button
                    rejectButtons.forEach(rejectButton => {
                        rejectButton.style.display = 'none';
                    });
                }
            }

            // Function to handle reject action
            function handleReject(event) {
                // Here, you can implement your logic for rejecting the item
                // For demonstration, let's just display a simple confirmation dialog
                const confirmReject = confirm("Yakin Menolak Pengajuan Tersebut?");
                if (confirmReject) {
                    // User confirmed, you can perform further actions here
                    console.log("ditolak");

                    const button = event.target;
                    button.outerHTML = '<span class="badge badge-danger">Ditolak</span>';

                    approveButtons.forEach(approveButton => {
                      approveButton.style.display = 'none';
                    });
                }
            }

            // Add click event listeners to approve buttons
            approveButtons.forEach(button => {
                button.addEventListener('click', handleApprove);
            });

            // Add click event listeners to reject buttons
            rejectButtons.forEach(button => {
                button.addEventListener('click', handleReject);
            });
        });
    </script>