# starGiftAttributeOriginalDetails

**Description** : *Info about the sender, receiver and message attached to the original gift &raquo;, before it was upgraded to a collectible gift &raquo;*

**Layer** : 216

```tl
starGiftAttributeOriginalDetails#e0bff26c flags:# sender_id:flags.0?Peer recipient_id:Peer date:int message:flags.1?TextWithEntities = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : -2601741816532542284,
	),
	recipient_id : $client->peerUser(
		user_id : 1236123365566490805,
	),
	date : 60,
	message : $client->textWithEntities(
		text : 'eCpHKoM7YlamR45t',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 69,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 16,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 77,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 93,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 45,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 47,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 57,
				language : 'NWFYwrgP0DMK19Av',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 38,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : 6557758704200291281,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 75,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 13,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 19,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 22,
				document_id : -162325464894451049,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 9,
			),
		),
	),
);
```