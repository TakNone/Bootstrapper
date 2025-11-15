# inputInvoiceStarGift

**Description** : *Used to buy a Telegram Star Gift, see here &raquo; for more info*

**Layer** : 218

```tl
inputInvoiceStarGift#e8625e92 flags:# hide_name:flags.0?true include_upgrade:flags.2?true peer:InputPeer gift_id:long message:flags.1?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	gift_id : -2935705244870454099,
	message : $client->textWithEntities(
		text : 'rA1VUDs07XBqim6x',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 44,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 97,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 1,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 11,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 33,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 7,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 93,
				language : 'KpTy5a2zsWe8Y9SX',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 2,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 46,
				user_id : 1430970633881316242,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 90,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 40,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 97,
				document_id : -7164651914900478754,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 62,
			),
		),
	),
);
```