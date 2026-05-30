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
		user_id : 8308108384359206944,
	),
	recipient_id : $client->peerUser(
		user_id : 1681501201887642228,
	),
	date : 41,
	message : $client->textWithEntities(
		text : 'bSjYwq9NCMZ5vGHc',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 45,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 5,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 21,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 26,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 26,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 99,
				language : 'jRTM3tY0PHo1zvwd',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 80,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : 8528116276483602916,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 37,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 72,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 21,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 81,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 82,
				document_id : -3008746173690870534,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 7,
			),
		),
	),
);
```