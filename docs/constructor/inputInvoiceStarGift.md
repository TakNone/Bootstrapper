# inputInvoiceStarGift

**Description** : *Used to buy a Telegram Star Gift, see here » for more info*

**Layer** : 211

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
	gift_id : -5401793647196221432,
	message : $client->textWithEntities(
		text : 'quopvEcteRrH76bw',
		entities : array(
			$client->messageEntityUnknown(
				offset : 26,
				length : 74,
			),
			$client->messageEntityMention(
				offset : 57,
				length : 29,
			),
			$client->messageEntityHashtag(
				offset : 41,
				length : 46,
			),
			$client->messageEntityBotCommand(
				offset : 59,
				length : 70,
			),
			$client->messageEntityUrl(
				offset : 15,
				length : 16,
			),
			$client->messageEntityEmail(
				offset : 94,
				length : 44,
			),
			$client->messageEntityBold(
				offset : 16,
				length : 59,
			),
			$client->messageEntityItalic(
				offset : 68,
				length : 73,
			),
			$client->messageEntityCode(
				offset : 86,
				length : 99,
			),
			$client->messageEntityPre(
				offset : 83,
				length : 45,
				language : '1k3BhHdeCEOu9LXs',
			),
			$client->messageEntityTextUrl(
				offset : 18,
				length : 9,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 73,
				length : 68,
				user_id : -3255197565638454306,
			),
			$client->inputMessageEntityMentionName(
				offset : 65,
				length : 55,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 84,
				length : 34,
			),
			$client->messageEntityCashtag(
				offset : 75,
				length : 2,
			),
			$client->messageEntityUnderline(
				offset : 35,
				length : 63,
			),
			$client->messageEntityStrike(
				offset : 39,
				length : 33,
			),
			$client->messageEntityBankCard(
				offset : 35,
				length : 98,
			),
			$client->messageEntitySpoiler(
				offset : 55,
				length : 60,
			),
			$client->messageEntityCustomEmoji(
				offset : 37,
				length : 5,
				document_id : 3815491142096763189,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 71,
				length : 97,
			),
		),
	),
);
```