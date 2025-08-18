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
				data : '
Kg?LiveProto???F',
				data_hash : 'G???LiveProto???',
				secret : ',????LiveProto???U',
			),
			front_side : $client->secureFileEmpty(),
			reverse_side : $client->secureFileEmpty(),
			selfie : $client->secureFileEmpty(),
			translation : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : -2377584886017148415,
					access_hash : 4890634848218898493,
					size : -4334198814542161009,
					dc_id : 30,
					date : 42,
					file_hash : 'nO]LiveProto-?',
					secret : '2X??LiveProto?AX
',
				),
			),
			files : array(
				$client->secureFileEmpty(),
				$client->secureFile(
					id : 162327878236500036,
					access_hash : -5989252561058492074,
					size : 5719165322858393900,
					dc_id : 7,
					date : 47,
					file_hash : 'в0?RLiveProto]]?uT',
					secret : ']?P??LiveProto ?ſ?',
				),
			),
			plain_data : $client->securePlainPhone(
				phone : '+1234567890',
			),
			hash : '?
DrLiveProto-??',
		),
	),
	credentials : $client->secureCredentialsEncrypted(
		data : '?P??LiveProto???v',
		hash : 'm?@ULiveProto?m',
		secret : '?$??LiveProto;???',
	),
);
```