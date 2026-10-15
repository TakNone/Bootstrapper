# starGiftAttributeOriginalDetails

**Description** : *Info about the sender, receiver and message attached to the original gift &raquo;, before it was upgraded to a collectible gift &raquo;*

**Layer** : 229

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
		user_id : -8089281916424394716,
	),
	recipient_id : $client->peerUser(
		user_id : 6108578560568531578,
	),
	date : 41,
	message : $client->textWithEntities(
		text : 'ulnUvDxYiVH6MZcK',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 27,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 99,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 22,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 81,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 30,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 73,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 58,
				language : 'lCwdTPfmj9HLOV3J',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 100,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 95,
				user_id : -8503841785964486090,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 54,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 67,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 30,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 67,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 96,
				document_id : 3557295354972547024,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 75,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 39,
				date : 100,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 27,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 43,
				old_text : 'z6FmZE1PfbLiUeW3',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 73,
			),
		),
	),
);
```