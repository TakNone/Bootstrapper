# starGiftAttributeOriginalDetails

**Description** : *Info about the sender, receiver and message attached to the original gift &raquo;, before it was upgraded to a collectible gift &raquo;*

**Layer** : 233

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
		user_id : 7164289692010397382,
	),
	recipient_id : $client->peerUser(
		user_id : 5499507353440587772,
	),
	date : 98,
	message : $client->textWithEntities(
		text : '6gR0y4eMUNtsEfk9',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 96,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 100,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 21,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 67,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 75,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 26,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 23,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 4,
				language : 'VqRD1mWTcekrPNM7',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 48,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : -8118683436427025160,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 21,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 23,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 94,
				document_id : 7503848690755995476,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 38,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 15,
				date : 54,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 34,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 73,
				old_text : 'c9AolGJNVj1Fxh8R',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 63,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 55,
			),
		),
	),
);
```