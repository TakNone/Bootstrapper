# inputInvoicePremiumGiftStars

**Description** : *Used to gift a Telegram Premium subscription to another user, paying with Telegram Stars*

**Layer** : 222

```tl
inputInvoicePremiumGiftStars#dabab2ef flags:# user_id:InputUser months:int message:flags.0?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | Who will receive the gifted subscription |
| <mark>months</mark> | [`int`](type/int) | Duration of the subscription in months, must be one of the options with currency == "XTR" returned by payments.getPremiumGiftCodeOptions |
| **message** | [`flags.0?TextWithEntities`](type/TextWithEntities) | Message attached with the gift |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoicePremiumGiftStars(
	user_id : $client->get_input_user(user : '@TakNone'),
	months : 36,
	message : $client->textWithEntities(
		text : 'kXISLB30tmlQZRqP',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 68,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 91,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 36,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 35,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 97,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 55,
				language : 'lLITw1AnVWZfdkDK',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 46,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 92,
				user_id : 3401192093100494896,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 23,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 15,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 36,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 93,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 52,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 66,
				document_id : 7614669322995604571,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 45,
			),
		),
	),
);
```