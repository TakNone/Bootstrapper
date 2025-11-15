# starsGiveawayOption

**Description** : *Contains info about a Telegram Star giveaway option*

**Layer** : 216

```tl
starsGiveawayOption#94ce852a flags:# extended:flags.0?true default:flags.1?true stars:long yearly_boosts:int store_product:flags.2?string currency:string amount:long winners:Vector<StarsGiveawayWinnersOption> = StarsGiveawayOption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **extended** | [`flags.0?true`](type/true) | If set, this option must only be shown in the full list of giveaway options (i.e. they must be added to the list only when the user clicks on the expand button) |
| **default** | [`flags.1?true`](type/true) | If set, this option must be pre-selected by default in the option list |
| <mark>stars</mark> | [`long`](type/long) | The number of Telegram Stars that will be distributed among winners |
| <mark>yearly_boosts</mark> | [`int`](type/int) | Number of times the chat will be boosted for one year if the inputStorePaymentStarsGiveaway.boost_peer flag is populated |
| **store_product** | [`flags.2?string`](type/string) | Identifier of the store product associated with the option, official apps only |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>winners</mark> | [`Vector<StarsGiveawayWinnersOption>`](type/StarsGiveawayWinnersOption) | Allowed options for the number of giveaway winners |

---

## Type

[StarsGiveawayOption](type/StarsGiveawayOption)

---

## Example

```php
$starsGiveawayOption = $client->starsGiveawayOption(
	extended : true,
	default : true,
	stars : -3656216551173288459,
	yearly_boosts : 60,
	store_product : 'wc0GUrVio1sat2bO',
	currency : 'KfV0ZB1R7cdFAPGI',
	amount : 2393722184069876564,
	winners : array(
		$client->starsGiveawayWinnersOption(
			default : true,
			users : 40,
			per_user_stars : -5978922373595546014,
		),
	),
);
```