# codeSettings

**Description** : *Settings used by telegram servers for sending the confirm code*

**Layer** : 218

```tl
codeSettings#ad253d78 flags:# allow_flashcall:flags.0?true current_number:flags.1?true allow_app_hash:flags.4?true allow_missed_call:flags.5?true allow_firebase:flags.7?true unknown_number:flags.9?true logout_tokens:flags.6?Vector<bytes> token:flags.8?string app_sandbox:flags.8?Bool = CodeSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **allow_flashcall** | [`flags.0?true`](type/true) | Whether to allow phone verification via phone calls |
| **current_number** | [`flags.1?true`](type/true) | Pass true if the phone number is used on the current device. Ignored if allow_flashcall is not set |
| **allow_app_hash** | [`flags.4?true`](type/true) | If a token that will be included in eventually sent SMSs is required: required in newer versions of android, to use the android SMS receiver APIs |
| **allow_missed_call** | [`flags.5?true`](type/true) | Whether this device supports receiving the code using the auth.codeTypeMissedCall method |
| **allow_firebase** | [`flags.7?true`](type/true) | Whether Firebase auth is supported |
| **unknown_number** | [`flags.9?true`](type/true) | Set this flag if there is a SIM card in the current device, but it is not possible to check whether the specified phone number matches the SIM's phone number |
| **logout_tokens** | [`flags.6?Vector<bytes>`](type/bytes) | Previously stored future auth tokens, see the documentation for more info » |
| **token** | [`flags.8?string`](type/string) | Used only by official iOS apps for Firebase auth: device token for apple push |
| **app_sandbox** | [`flags.8?Bool`](type/Bool) | Used only by official iOS apps for firebase auth: whether a sandbox-certificate will be used during transmission of the push notification |

---

## Type

[CodeSettings](type/CodeSettings)

---

## Example

```php
$codeSettings = $client->codeSettings(
	allow_flashcall : true,
	current_number : true,
	allow_app_hash : true,
	allow_missed_call : true,
	allow_firebase : true,
	unknown_number : true,
	logout_tokens : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	token : 'jn5lYqzwdSgLW7J6',
	app_sandbox : false,
);
```