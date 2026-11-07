# bots.setCustomVerification

**Description** : *Verify a user or chat on behalf of an organization &raquo;*

**Layer** : 233

```tl
bots.setCustomVerification#f4946757 flags:# enabled:flags.1?true bot:flags.0?InputUser peer:InputPeer custom_description:flags.2?TextWithEntities = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **enabled** | [`flags.1?true`](type/true) | If set, adds the verification; otherwise removes verification |
| **bot** | [`flags.0?InputUser`](type/InputUser) | Must not be set if invoked by a bot, must be set to the ID of an owned bot if invoked by a user |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer to verify |
| **custom_description** | [`flags.2?TextWithEntities`](type/TextWithEntities) | Custom description for the verification, the UTF-8 length limit for this field is contained in bot_verification_description_length_limit ». If not set, Was verified by organization "organization_name" will be used as description |

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
	bot : $client->get_input_user(user : '@TakNone'),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	custom_description : $client->textWithEntities(
		text : 'LdbpMJcDGtxnVHv6',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 99,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 19,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 69,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 96,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 0,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 0,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 53,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 43,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 71,
				language : 'Gg9yrDCsPuVioXtc',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 60,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 76,
				user_id : 3633356033578229197,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 94,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 26,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 38,
				document_id : -8206078964532985279,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 22,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 6,
				date : 40,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 22,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 2,
				old_text : 'as9vZLXWKqGhPgFN',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 82,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 46,
			),
		),
	),
);
```