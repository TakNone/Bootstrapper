# auth.sentCodeTypeFirebaseSms

**Description** : *An authentication code should be delivered via SMS after Firebase attestation, as described in the auth documentation &raquo;*

**Layer** : 211

```tl
auth.sentCodeTypeFirebaseSms#9fd736 flags:# nonce:flags.0?bytes play_integrity_project_id:flags.2?long play_integrity_nonce:flags.2?bytes receipt:flags.1?string push_timeout:flags.1?int length:int = auth.SentCodeType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **nonce** | [`flags.0?bytes`](type/bytes) | On Android, the nonce to be used as described in the auth documentation » |
| **play_integrity_project_id** | [`flags.2?long`](type/long) | Google Play Integrity project ID |
| **play_integrity_nonce** | [`flags.2?bytes`](type/bytes) | Play Integrity API nonce |
| **receipt** | [`flags.1?string`](type/string) | On iOS, must be compared with the receipt extracted from the received push notification |
| **push_timeout** | [`flags.1?int`](type/int) | On iOS: if a push notification with the ios_push_secret isn't received within push_timeout seconds, the next_type authentication method must be used, with auth.resendCode |
| <mark>length</mark> | [`int`](type/int) | Length of the code that will be delivered |

---

## Type

[auth.SentCodeType](type/auth.SentCodeType)

---

## Example

```php
$authSentCodeType = $client->auth->sentCodeTypeFirebaseSms(
	nonce : '?gϙ?LiveProto?X?ۋ',
	play_integrity_project_id : -8611730931387330797,
	play_integrity_nonce : 'M??l?LiveProtoQٌ?"',
	receipt : '5ZWqNuMYDxw4Qfrc',
	push_timeout : 62,
	length : 17,
);
```