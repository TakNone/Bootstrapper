# bots.updateStarRefProgram

**Description** : *Create, edit or delete the affiliate program of a bot we own*

**Layer** : 218

```tl
bots.updateStarRefProgram#778b5ab3 flags:# bot:InputUser commission_permille:int duration_months:flags.0?int = StarRefProgram;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot |
| <mark>commission_permille</mark> | [`int`](type/int) | The permille commission rate: it indicates the share of Telegram Stars received by affiliates for every transaction made by users they referred inside of the bot.    The minimum and maximum values for this parameter are contained in the starref_min_commission_permille and starref_max_commission_permille client configuration parameters.   Can be 0 to terminate the affiliate program.  Both the duration and the commission may only be raised after creation of the program: to lower them, the program must first be terminated and a new one created |
| **duration_months** | [`flags.0?int`](type/int) | Indicates the duration of the affiliate program; if not set, there is no expiration date |

---

## Result

[StarRefProgram](type/StarRefProgram)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **STARREF_AWAITING_END** | `400` | The previous referral program was terminated less than 24 hours ago: further changes can be made after the date specified in userFull.starref_program.end_date |
| **STARREF_PERMILLE_INVALID** | `400` | The specified commission_permille is invalid: the minimum and maximum values for this parameter are contained in the starref_min_commission_permille and starref_max_commission_permille client configuration parameters |
| **STARREF_PERMILLE_TOO_LOW** | `400` | The specified commission_permille is too low: the minimum and maximum values for this parameter are contained in the starref_min_commission_permille and starref_max_commission_permille client configuration parameters |

---

## Example

```php
$starRefProgram = $client->bots->updateStarRefProgram(
	bot : $client->get_input_user(user : '@TakNone'),
	commission_permille : 16,
	duration_months : 94,
);
```