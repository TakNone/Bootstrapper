# botVerifierSettings

**Description** : *Info about the current verifier bot &raquo;*

**Layer** : 222

```tl
botVerifierSettings#b0cd6617 flags:# can_modify_custom_description:flags.1?true icon:long company:string custom_description:flags.0?string = BotVerifierSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_modify_custom_description** | [`flags.1?true`](type/true) | Indicates whether the bot is allowed to set a custom description field for individual verified peers, different from the custom_description provided here |
| <mark>icon</mark> | [`long`](type/long) | Verification icon |
| <mark>company</mark> | [`string`](type/string) | The name of the organization that provides the verification |
| **custom_description** | [`flags.0?string`](type/string) | An optional default description for the verification |

---

## Type

[BotVerifierSettings](type/BotVerifierSettings)

---

## Example

```php
$botVerifierSettings = $client->botVerifierSettings(
	can_modify_custom_description : true,
	icon : -4102293086099249339,
	company : '1NFypJimk8Mde5cx',
	custom_description : 's8L2r3xIuw0f9TdV',
);
```