# messageActionSecureValuesSentMe

**Description** : *Secure telegram passport values were received*

**Layer** : 216

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
				data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				data_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			front_side : $client->secureFileEmpty(),
			reverse_side : $client->secureFileEmpty(),
			selfie : $client->secureFileEmpty(),
			translation : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : 1871371131091370910,
					access_hash : 7500293887347338512,
					size : 5470239016720761572,
					dc_id : 79,
					date : 92,
					file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			files : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : -6001874890166888860,
					access_hash : 1119628804709900269,
					size : 6890460953419753052,
					dc_id : 68,
					date : 85,
					file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			plain_data : $client->securePlainPhone(
				phone : '+1234567890',
			),
			hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	credentials : $client->secureCredentialsEncrypted(
		data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
);
```