
<?php
private function enviarConfirmation($idAlumno, $fecha)
{
    $alumno = Alumno::find($idAlumno);
    $tutor = Tutor::find($alumno->id_tutor);
    $mailable = new NotificacionAsistenciaAlumno($alumno, $fecha);
    Mail::to($tutor->correo)->send($mailable);
}