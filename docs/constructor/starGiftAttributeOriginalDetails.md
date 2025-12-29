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
		user_id : 746268985355050947,
	),
	recipient_id : $client->peerUser(
		user_id : 500989600141884654,
	),
	date : 4,
	message : $client->textWithEntities(
		text : 'REjLKFlGHor7cUSs',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 55,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 79,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 68,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 87,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 94,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 60,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 7,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 66,
				language : 'bYAuVB43HD8twphJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 45,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 94,
				user_id : 6547239476339175980,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 71,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 99,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 52,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 25,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 51,
				document_id : 6618266246668040506,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 12,
			),
		),
	),
);
```