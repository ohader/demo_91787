define(['TYPO3/CMS/Backend/FormEngine', 'TYPO3/CMS/Backend/Modal'], (FormEngine, Modal) => {
    FormEngine.registerOnFieldChangeHandler('demo-91787-handler', (data) => {
        Modal.confirm(data.title, 'Hello from BEHAVIOR fieldChangeFunc handling...')
            .on('button.clicked', () => Modal.dismiss());
    });
})
