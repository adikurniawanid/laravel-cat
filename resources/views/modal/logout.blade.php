 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin untuk Keluar?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Pilih "Keluar" untuk mengakhiri sesi saat ini.</div>
             <div class="modal-footer">
                 <form action="/auth/logout" method="get">
                     @csrf
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                     <button class="btn btn-primary">Keluar</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
