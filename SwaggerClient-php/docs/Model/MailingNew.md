# MailingNew

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mailing_id** | **string** | Unqiue identifier for the mailing that has been created, used in | [optional] 
**block** | **string** | The name of the block or development that the mailing is for | [optional] 
**expected_letters** | **float** | The number of letters specified when the mailing was created | [optional] 
**letters_received** | **float** | The number of letters successfully received via [/mailings/{mailing_id}/letters](/#operation/addLetter) | [optional] 
**status** | **string** | Status of the mailing | [optional] 
**date_created** | [**\DateTime**](\DateTime.md) | Date the mailing was created | [optional] 
**date_sent** | [**\DateTime**](\DateTime.md) | Date the mailing was sent | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

