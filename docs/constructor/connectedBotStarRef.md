# connectedBotStarRef

**Description** : *Info about an active affiliate program we have with a Mini App*

**Layer** : 218

```tl
connectedBotStarRef#19a13f71 flags:# revoked:flags.1?true url:string date:int bot_id:long commission_permille:int duration_months:flags.0?int participants:long revenue:long = ConnectedBotStarRef;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	date : 70,
	bot_id : -2024174426640536684,
	commission_permille : 87,
	duration_months : 46,
	participants : -7587356558388111998,
	revenue : 6039730047757633731,
);
```