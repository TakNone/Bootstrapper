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
	gift_id : -3937914059051305407,
	message : $client->textWithEntities(
		text : 'e1iOUWNkMlrABCSG',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 49,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 61,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 52,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 85,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 95,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 91,
				language : '6vjiSX459ZLnPFNt',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 81,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 40,
				user_id : 7502432830342811966,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 87,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 34,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 53,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 5,
				document_id : 5328269580459063788,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 39,
			),
		),
	),
);
```