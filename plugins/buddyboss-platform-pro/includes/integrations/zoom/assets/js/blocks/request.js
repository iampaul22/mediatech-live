/**
 * Fetch Zoom Meeting from Zoom API.
 * @param data
 * @returns {Promise}
 */
export const zoomMeetingFetch = ( data ) => {
	return new Promise( ( resolve, reject ) => {
		wp.ajax.send( 'zoom_meeting_sync', {
			data: data,
			success: function ( response ) {
				resolve( response );
			},
			error: function ( error ) {
				reject( error );
			}
		} );
	} );
};
