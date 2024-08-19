<?php
require './header.php';
?>
<!-- Page content here -->

<button class="btn btn-warning" onclick="addestudiante.showModal()">Añadir Estudiante</button>
<!-- modal add Estudiante -->
<dialog id="addestudiante" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Hello!</h3>
        <p class="py-4">Press ESC key or click the button below to close</p>
        <div class="modal-action">
            <form method="post">
                <!-- if there is a button in form, it will close the modal -->
                <button type="submit" class="btn btn-success">Guardar</button>
                <button class="btn btn-error" onclick="addestudiante.close()">Cerrar</button>
            </form>
        </div>
    </div>
</dialog>
<!-- modal add Estudiante -->
<div role="tablist" class="tabs tabs-lifted">
    <input type="radio" name="my_tabs_2" role="tab" class="tab text-lg font-bold" aria-label="1ro" />
    <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
        <input type="text" placeholder="Buscar Estudiante" class="input input-bordered input-sm w-full max-w-xs" />
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>Job</th>
                        <th>Favorite Color</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>

                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12">
                                        <img src="https://img.daisyui.com/images/profile/demo/2@94.webp" alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Hart Hagerty</div>
                                    <div class="text-sm opacity-50">United States</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            Zemlak, Daniel and Leannon
                            <br />
                            <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                        </td>
                        <td>Purple</td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                    <!-- row 2 -->
                    <tr>

                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12">
                                        <img src="https://img.daisyui.com/images/profile/demo/3@94.webp" alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Brice Swyre</div>
                                    <div class="text-sm opacity-50">China</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            Carroll Group
                            <br />
                            <span class="badge badge-ghost badge-sm">Tax Accountant</span>
                        </td>
                        <td>Red</td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                    <!-- row 3 -->
                    <tr>

                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12">
                                        <img src="https://img.daisyui.com/images/profile/demo/4@94.webp" alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Marjy Ferencz</div>
                                    <div class="text-sm opacity-50">Russia</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            Rowe-Schoen
                            <br />
                            <span class="badge badge-ghost badge-sm">Office Assistant I</span>
                        </td>
                        <td>Crimson</td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                    <!-- row 4 -->
                    <tr>

                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12">
                                        <img src="https://img.daisyui.com/images/profile/demo/5@94.webp" alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Yancy Tear</div>
                                    <div class="text-sm opacity-50">Brazil</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            Wyman-Ledner
                            <br />
                            <span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
                        </td>
                        <td>Indigo</td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                </tbody>
                <!-- foot -->
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Favorite Color</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="2do" checked="checked" />
    <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
        Tab content 2
    </div>

    <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="3er" />
    <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
        Tab content 3
    </div>

    <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="4to" />
    <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
        Tab content 3
    </div>

    <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="5to" />
    <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
        Tab content 3
    </div>

    <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="6to" />
    <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
        Tab content 3
    </div>
</div>


<?php
require './footer.php';
?>