# inputInvoiceStarGift

**Description** : *Used to buy a Telegram Star Gift, see here &raquo; for more info*

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
	gift_id : -3112938035364663143,
	message : $client->textWithEntities(
		text : 'vfHFMlKuOLSVmQs3',
		entities : array(
			$client->messageEntityUnknown(
				offset : 60,
				length : 3,
			),
			$client->messageEntityMention(
				offset : 10,
				length : 12,
			),
			$client->messageEntityHashtag(
				offset : 43,
				length : 54,
			),
			$client->messageEntityBotCommand(
				offset : 42,
				length : 69,
			),
			$client->messageEntityUrl(
				offset : 26,
				length : 59,
			),
			$client->messageEntityEmail(
				offset : 100,
				length : 38,
			),
			$client->messageEntityBold(
				offset : 72,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 54,
				length : 90,
			),
			$client->messageEntityCode(
				offset : 20,
				length : 26,
			),
			$client->messageEntityPre(
				offset : 81,
				length : 93,
				language : 'IfLGFqzMgWNtsP4u',
			),
			$client->messageEntityTextUrl(
				offset : 71,
				length : 2,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 90,
				length : 86,
				user_id : 6818502779250883139,
			),
			$client->inputMessageEntityMentionName(
				offset : 85,
				length : 88,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 40,
				length : 75,
			),
			$client->messageEntityCashtag(
				offset : 16,
				length : 80,
			),
			$client->messageEntityUnderline(
				offset : 75,
				length : 5,
			),
			$client->messageEntityStrike(
				offset : 36,
				length : 64,
			),
			$client->messageEntityBankCard(
				offset : 16,
				length : 74,
			),
			$client->messageEntitySpoiler(
				offset : 36,
				length : 63,
			),
			$client->messageEntityCustomEmoji(
				offset : 75,
				length : 91,
				document_id : 628197004986089285,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 36,
				length : 100,
			),
		),
	),
);
```