# bots.setCustomVerification

**Description** : *Verify a user or chat on behalf of an organization &raquo;*

**Layer** : 218

```tl
bots.setCustomVerification#8b89dfbd flags:# enabled:flags.1?true bot:flags.0?InputUser peer:InputPeer custom_description:flags.2?string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **enabled** | [`flags.1?true`](type/true) | If set, adds the verification; otherwise removes verification |
| **bot** | [`flags.0?InputUser`](type/InputUser) | Must not be set if invoked by a bot, must be set to the ID of an owned bot if invoked by a user |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer to verify |
| **custom_description** | [`flags.2?string`](type/string) | Custom description for the verification, the UTF-8 length limit for this field is contained in bot_verification_description_length_limit ». If not set, Was verified by organization "organization_name" will be used as description |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **BOT_VERIFIER_FORBIDDEN** | `403` | This bot cannot assign verification icons |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->bots->setCustomVerification(
	enabled : true,
	bot : $client->get_input_user(peer : '@TakNone'),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	custom_description : '4jyh1ucrY3JivdaQ',
);
```