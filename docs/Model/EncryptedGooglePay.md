# EncryptedGooglePay

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | [**\FirstData\FirstApi\Client\Model\EncryptedGooglePayData**](EncryptedGooglePayData.md) |  | 
**signature** | **string** | Signature for verifying that the message comes from Google. The signature is created using ECDSA. | 
**version** | **string** | Identifies under which encryption/signing scheme this message has been created. In this way, the protocol can evolve over time if needed. For Google Payments transactions, this should be set to ECv1. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


