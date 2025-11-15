# connectedBotStarRef

**Description** : *Info about an active affiliate program we have with a Mini App*

**Layer** : 216

```tl
connectedBotStarRef#19a13f71 flags:# revoked:flags.1?true url:string date:int bot_id:long commission_permille:int duration_months:flags.0?int participants:long revenue:long = ConnectedBotStarRef;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **revoked** | [`flags.1?true`](type/true) | If set, this affiliation was revoked by the affiliate using payments.editConnectedStarRefBot, or by the affiliation program owner using bots.updateStarRefProgram |
| <mark>url</mark> | [`string`](type/string) | Referral link to be shared |
| <mark>date</mark> | [`int`](type/int) | When did we affiliate with bot_id |
| <mark>bot_id</mark> | [`long`](type/long) | ID of the mini app that created the affiliate program |
| <mark>commission_permille</mark> | [`int`](type/int) | The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by bot_id |
| **duration_months** | [`flags.0?int`](type/int) | Number of months the program will be active; if not set, there is no expiration date |
| <mark>participants</mark> | [`long`](type/long) | The number of users that used the affiliate program |
| <mark>revenue</mark> | [`long`](type/long) | The number of Telegram Stars that were earned by the affiliate program |

---

## Type

[ConnectedBotStarRef](type/ConnectedBotStarRef)

---

## Example

```php
$connectedBotStarRef = $client->connectedBotStarRef(
	revoked : true,
	url : 'https://docs.liveproto.dev',
	date : 55,
	bot_id : 281242754920030255,
	commission_permille : 22,
	duration_months : 40,
	participants : 5774586562785357009,
	revenue : 5600733826744202061,
);
```