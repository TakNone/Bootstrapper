# messageActionSecureValuesSentMe

**Description** : *Secure telegram passport values were received*

**Layer** : 227

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
					id : 6432641741309739216,
					access_hash : -4001308027012829837,
					size : 3089873303515987888,
					dc_id : 36,
					date : 82,
					file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			files : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : -5791667890487602960,
					access_hash : -2735124959131406066,
					size : 6423945162654679156,
					dc_id : 81,
					date : 76,
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