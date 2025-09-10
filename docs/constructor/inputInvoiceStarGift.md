# inputInvoiceStarGift

**Description** : *Used to buy a Telegram Star Gift, see here &raquo; for more info*

**Layer** : 214

```tl
inputInvoiceStarGift#e8625e92 flags:# hide_name:flags.0?true include_upgrade:flags.2?true peer:InputPeer gift_id:long message:flags.1?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **hide_name** | [`flags.0?true`](type/true) | If set, your name will be hidden if the destination user decides to display the gift on their profile (they will still see that you sent the gift) |
| **include_upgrade** | [`flags.2?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
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
	peer : $client->inputPeerEmpty(),
	gift_id : 5063145994419233740,
	message : $client->textWithEntities(
		text : 'Bl6S7FmtxwenM9yd',
		entities : array(
			$client->messageEntityUnknown(
				offset : 12,
				length : 65,
			),
			$client->messageEntityMention(
				offset : 96,
				length : 61,
			),
			$client->messageEntityHashtag(
				offset : 5,
				length : 14,
			),
			$client->messageEntityBotCommand(
				offset : 51,
				length : 37,
			),
			$client->messageEntityUrl(
				offset : 79,
				length : 83,
			),
			$client->messageEntityEmail(
				offset : 15,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 11,
				length : 38,
			),
			$client->messageEntityItalic(
				offset : 74,
				length : 5,
			),
			$client->messageEntityCode(
				offset : 72,
				length : 16,
			),
			$client->messageEntityPre(
				offset : 53,
				length : 83,
				language : '0qOgmdC3F9eJzbtw',
			),
			$client->messageEntityTextUrl(
				offset : 41,
				length : 85,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 10,
				length : 10,
				user_id : -2035182675485650149,
			),
			$client->inputMessageEntityMentionName(
				offset : 55,
				length : 37,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 35,
				length : 61,
			),
			$client->messageEntityCashtag(
				offset : 42,
				length : 7,
			),
			$client->messageEntityUnderline(
				offset : 15,
				length : 61,
			),
			$client->messageEntityStrike(
				offset : 87,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 33,
				length : 2,
			),
			$client->messageEntitySpoiler(
				offset : 29,
				length : 1,
			),
			$client->messageEntityCustomEmoji(
				offset : 55,
				length : 29,
				document_id : 5987156696517953681,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 97,
				length : 88,
			),
		),
	),
);
```