# starGiftAttributeOriginalDetails

**Description** : *Info about the sender, receiver and message attached to the original gift &raquo;, before it was upgraded to a collectible gift &raquo;*

**Layer** : 218

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
		user_id : -8231444422348948214,
	),
	recipient_id : $client->peerUser(
		user_id : 295919171792186586,
	),
	date : 3,
	message : $client->textWithEntities(
		text : 'Q0dLJhGH92wpcq13',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 31,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 29,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 79,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 86,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 64,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 76,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 69,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 43,
				language : '0GajEXDzrsUOtS3v',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 61,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : -1710505897994873078,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 34,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 49,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 30,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 90,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 88,
				document_id : -1353899420570975033,
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