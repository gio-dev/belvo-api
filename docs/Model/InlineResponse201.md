# InlineResponse201

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | [optional] 
**institution** | **string** | Belvo&#x27;s name for the institution. | [optional] 
**access_mode** | **string** | The link type. For more information, see our [Links](https://developers.belvo.com/docs/links-and-institutions#links) article. We return one of the following enum values:   - &#x60;single&#x60;   - &#x60;recurrent&#x60;   - &#x60;null&#x60; | [optional] 
**last_accessed_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of Belvo&#x27;s most recent successful access to the institution for the given link. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | [optional] 
**external_id** | **string** | The &#x60;external_id&#x60; you provided as an additional identifier for the link. For more information, see our [Link creation article](https://developers.belvo.com/docs/link-creation-best-practices#adding-your-own-identifier). | [optional] 
**institution_user_id** | **string** | &lt;div style&#x3D;\&quot;background-color:#f4f6f8; border-left: 6px solid #0663F9;padding: 12px;margin-left: 25px; border-radius: 4px; margin-right: 25px\&quot;&gt; &lt;strong&gt;Info:&lt;/strong&gt; Only applicable for links created &lt;b&gt;after 08-02-2022&lt;/b&gt;. &lt;/div&gt;   A unique 44-character string that can be used to identify a user at a given institution.   📚 Check out our [Avoiding duplicated links](https://developers.belvo.com/docs/link-creation-best-practices#avoiding-duplicated-links) DevPortal article for more information and tips on how to use it. | [optional] 
**status** | **string** | The current status of the link. For more information, see our [Link](https://developers.belvo.com/docs/links-and-institutions#links) article in the devportal. We return one of the following values:   - &#x60;valid&#x60;   - &#x60;invalid&#x60;   - &#x60;unconfirmed&#x60;   - &#x60;token_required&#x60; | [optional] 
**created_by** | **string** | The unique ID for the user that created this item. | [optional] 
**refresh_rate** | **string** | The update refresh rate for the recurrent link. For more information, check out our [recurrent link documentation](https://developers.belvo.com/docs/links-and-institutions#recurrent-links) in our DevPortal. We return one of the following enum values:   - &#x60;6h&#x60;   - &#x60;12h&#x60;   - &#x60;24h&#x60;   - &#x60;7d&#x60; (default)   - &#x60;30d&#x60; (once a month)   - &#x60;null&#x60; (for single links) | [optional] [default to '7d']
**credentials_storage** | **string** | Indicates how long credentials are stored. For links where &#x60;access_mode&#x3D;recurrent&#x60;, this is set to &#x60;store&#x60;.  We return one of the following values:    - &#x60;store&#x60; - credentials are stored (until the link is deleted).   - &#x60;nostore&#x60; - credentials are not stored.   -  Any value between &#x60;1d&#x60; and &#x60;365d&#x60; to indicate the number of days the credentials are stored (from when the link was &#x60;created_at&#x60;). | [optional] 
**fetch_resources** | **string[]** | An array of resources that you will receive a historical update for. | [optional] 
**stale_in** | **string** | Indicates how long any data will be stored in Belvo&#x27;s database for the link (both single and recurrent), relative to the &#x60;last_accessed_at&#x60; parameter. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

