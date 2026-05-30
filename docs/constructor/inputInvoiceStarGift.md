# inputInvoiceStarGift

**Description** : *Used to buy a Telegram Star Gift, see here &raquo; for more info*

**Layer** : 225

```tl
inputInvoiceStarGift#e8625e92 flags:# hide_name:flags.0?true include_upgrade:flags.2?true peer:InputPeer gift_id:long message:flags.1?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **hide_name** | [`flags.0?true`](type/true) | If set, your name will be hidden if the destination user decides to display the gift on their profile (they will still see that you sent the gift) |
| **include_upgrade** | [`flags.2?true`](type/true) | Also pay for an eventual upgrade of the gift to a collectible gift » |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Receiver of the gift |
| <mark>gift_id</mark> | [`long`](type/long) | Identifier of the gift, from starGift.id |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Optional message, attached with the gift. The maximum length for this field is specified in the stargifts_message_length_max client configuration value » |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGift(
	hide_name : true,
	include_upgrade : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	gift_id : 6404266044392870484,
	message : $client->textWithEntities(
		text : 'ErnlCQfjJGs40Zv5',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 49,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 26,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 68,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 19,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 81,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 63,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 85,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 85,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 41,
				language : 'f521Xpz0qAlwjvJr',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 56,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : -6033983854997314237,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 45,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 36,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 52,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 32,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 14,
				document_id : -322603418114058329,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 73,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 32,
				date : 37,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 34,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 74,
				old_text : 'YH3u5qT74QOVUal2',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 88,
			),
		),
	),
);
```