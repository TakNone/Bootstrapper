# messageActionSecureValuesSentMe

**Description** : *Secure telegram passport values were received*

**Layer** : 211

```tl
messageActionSecureValuesSentMe#1b287353 values:Vector<SecureValue> credentials:SecureCredentialsEncrypted = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>values</mark> | [`Vector<SecureValue>`](type/SecureValue) | Vector with information about documents and other Telegram Passport elements that were shared with the bot |
| <mark>credentials</mark> | [`SecureCredentialsEncrypted`](type/SecureCredentialsEncrypted) | Encrypted credentials required to decrypt the data |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSecureValuesSentMe(
	values : array(
		$client->secureValue(
			type : $client->secureValueTypePersonalDetails(),
			data : $client->secureData(
				data : '????LiveProto?
?X?',
				data_hash : '0J???LiveProto?
?',
				secret : '????DLiveProtoZ????',
			),
			front_side : $client->secureFileEmpty(),
			reverse_side : $client->secureFileEmpty(),
			selfie : $client->secureFileEmpty(),
			translation : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : 8554105617219107573,
					access_hash : 8022206298255403033,
					size : -3378667181342686109,
					dc_id : 54,
					date : 78,
					file_hash : 'v!?WLiveProto?A??',
					secret : '@????LiveProtod)=?k',
				),
			),
			files : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : 9003629953862890942,
					access_hash : 6529360289035039434,
					size : -5562291567080299316,
					dc_id : 20,
					date : 22,
					file_hash : 'F2ILiveProto[???',
					secret : '??A??LiveProto?}`',
				),
			),
			plain_data : $client->securePlainPhone(
				phone : '+1234567890',
			),
			hash : '!{?\'LiveProto? ??3',
		),
	),
	credentials : $client->secureCredentialsEncrypted(
		data : 'N?6\\LiveProto?????',
		hash : '???LiveProtoaF*?',
		secret : '1r?:LiveProto;?O?7',
	),
);
```