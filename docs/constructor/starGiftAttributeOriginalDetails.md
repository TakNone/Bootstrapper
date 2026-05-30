# starGiftAttributeOriginalDetails

**Description** : *Info about the sender, receiver and message attached to the original gift &raquo;, before it was upgraded to a collectible gift &raquo;*

**Layer** : 222

```tl
starGiftAttributeOriginalDetails#e0bff26c flags:# sender_id:flags.0?Peer recipient_id:Peer date:int message:flags.1?TextWithEntities = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **sender_id** | [`flags.0?Peer`](type/Peer) | Original sender of the gift, absent if the gift was private |
| <mark>recipient_id</mark> | [`Peer`](type/Peer) | Original receiver of the gift |
| <mark>date</mark> | [`int`](type/int) | When was the gift sent |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Original message attached to the gift, if present |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributeOriginalDetails(
	sender_id : $client->peerUser(
		user_id : 2514493397841454499,
	),
	recipient_id : $client->peerUser(
		user_id : 7234683263087185673,
	),
	date : 10,
	message : $client->textWithEntities(
		text : '16ftJ2QA7HOjlVox',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 66,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 18,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 17,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 17,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 7,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 56,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 16,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 73,
				language : 'QsYcp5yU6wJuoOxg',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 69,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : 5568882023971584830,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 49,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 48,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 75,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 28,
				document_id : 5953953032331501364,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 2,
			),
		),
	),
);
```