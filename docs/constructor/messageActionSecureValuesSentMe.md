# messageActionSecureValuesSentMe

**Description** : *Secure telegram passport values were received*

**Layer** : 218

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
					id : -2631923142008714063,
					access_hash : 8983917032348516629,
					size : 7255957194639887096,
					dc_id : 7,
					date : 42,
					file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			files : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : 476861479439718496,
					access_hash : 4137406624638258097,
					size : -8685573637523370021,
					dc_id : 24,
					date : 72,
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