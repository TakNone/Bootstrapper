# inputStorePaymentPremiumGiftCode

**Description** : *Used to gift Telegram Premium subscriptions only to some specific subscribers of a channel/supergroup or to some of our contacts, see here &raquo; for more info on giveaways and gifts*

**Layer** : 211

```tl
inputStorePaymentPremiumGiftCode#fb790393 flags:# users:Vector<InputUser> boost_peer:flags.0?InputPeer currency:string amount:long message:flags.1?TextWithEntities = InputStorePaymentPurpose;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>users</mark> | [`Vector<InputUser>`](type/InputUser) | The users that will receive the Telegram Premium subscriptions |
| **boost_peer** | [`flags.0?InputPeer`](type/InputPeer) | If set, the gifts will be sent on behalf of a channel/supergroup we are an admin of, which will also assign some boosts to it. Otherwise, the gift will be sent directly from the currently logged in user, and we will gain some extra boost slots. See here » for more info on giveaways and gifts |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Message attached with the gift |

---

## Type

[InputStorePaymentPurpose](type/InputStorePaymentPurpose)

---

## Example

```php
$inputStorePaymentPurpose = $client->inputStorePaymentPremiumGiftCode(
	users : array(
		$client->inputUserEmpty(),
		$client->inputUserSelf(),
		$client->inputUser(
			user_id : -4032275036561890388,
			access_hash : 1763672397424321583,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 75,
			user_id : -1847649336183130564,
		),
	),
	boost_peer : $client->inputPeerEmpty(),
	currency : 'JrySQXuogLITRG5Z',
	amount : 1908791333476041606,
	message : $client->textWithEntities(
		text : 'dnaEbpZvUMy6N4Pi',
		entities : array(
			$client->messageEntityUnknown(
				offset : 19,
				length : 4,
			),
			$client->messageEntityMention(
				offset : 87,
				length : 43,
			),
			$client->messageEntityHashtag(
				offset : 10,
				length : 86,
			),
			$client->messageEntityBotCommand(
				offset : 33,
				length : 20,
			),
			$client->messageEntityUrl(
				offset : 12,
				length : 21,
			),
			$client->messageEntityEmail(
				offset : 10,
				length : 97,
			),
			$client->messageEntityBold(
				offset : 89,
				length : 84,
			),
			$client->messageEntityItalic(
				offset : 90,
				length : 74,
			),
			$client->messageEntityCode(
				offset : 95,
				length : 92,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 61,
				language : '9oEAaMYxsF36KJPp',
			),
			$client->messageEntityTextUrl(
				offset : 46,
				length : 75,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 74,
				length : 89,
				user_id : 4310661779759576613,
			),
			$client->inputMessageEntityMentionName(
				offset : 84,
				length : 14,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 90,
				length : 40,
			),
			$client->messageEntityCashtag(
				offset : 39,
				length : 82,
			),
			$client->messageEntityUnderline(
				offset : 49,
				length : 70,
			),
			$client->messageEntityStrike(
				offset : 2,
				length : 44,
			),
			$client->messageEntityBankCard(
				offset : 84,
				length : 72,
			),
			$client->messageEntitySpoiler(
				offset : 52,
				length : 95,
			),
			$client->messageEntityCustomEmoji(
				offset : 36,
				length : 22,
				document_id : -8119871213743227332,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 85,
				length : 33,
			),
		),
	),
);
```