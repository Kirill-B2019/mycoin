ClassicEditor
	.create( document.querySelector( '.editor' ), {
		// Editor configuration.
	} )
	.then( editor => {
		window.editor = editor;
	} )
	.catch( handleSampleError );

function handleSampleError( error ) {
	const issueUrl = '';

	const message = [
		'Oops, something went wrong!',
		`Please, report the following error on  with the build id "5m9af09een7y-vg547q7qnprq" and the error stack trace:`
	].join( '\n' );

	console.error( message );
	console.error( error );
}
