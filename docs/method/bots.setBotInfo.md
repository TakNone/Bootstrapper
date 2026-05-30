# bots.setBotInfo

**Description** : *Set localized name, about text and description of a bot \(or of the current account, if called by a bot\)*

**Layer** : 222

```tl
bots.setBotInfo#10cf3123 flags:# bot:flags.2?InputUser lang_code:string name:flags.3?string about:flags.0?string description:flags.1?string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **bot** | [`flags.2?InputUser`](type/InputUser) | If called by a user, must contain the peer of a bot we own |
| <mark>lang_code</mark> | [`string`](type/string) | Language code, if left empty update the fallback about text and description |
| **name** | [`flags.3?string`](type/string) | New bot name |
| **about** | [`flags.0?string`](type/string) | New about text |
| **description** | [`flags.1?string`](type/string) | New description |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **USER_BOT_INVALID** | `400` | User accounts must provide the bot method parameter when calling this method. If there is no such method parameter, this method can only be invoked by bot accounts |

---

## Example

```php
$bool = $client->bots->setBotInfo(
	bot : $client->get_input_user(user : '@TakNone'),
	lang_code : '82YnZ1QqVHv4ERTN',
	name : '9mHsZYxALoMX0Nvu',
	about : 'B6QTFRtc5SUvhgdY',
	description : 'mTZzkrPyFo9MQHpU',
);
```