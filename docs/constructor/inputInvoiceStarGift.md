# inputInvoiceStarGift

**Description** : *Used to buy a Telegram Star Gift, see here &raquo; for more info*

**Layer** : 222

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
	gift_id : 7257118324364885364,
	message : $client->textWithEntities(
		text : 'rjUJYq6MfCD2hcWK',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 90,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 45,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 1,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 67,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 2,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 32,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 35,
				language : 'YjblUSv5NEwL8tpR',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 29,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 1,
				user_id : -144604063868108652,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 29,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 44,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 72,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 25,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 10,
				document_id : -7404111609503278363,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 70,
			),
		),
	),
);
```