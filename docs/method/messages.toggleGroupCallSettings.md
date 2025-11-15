# messages.toggleGroupCallSettings

**Layer** : 216

```tl
messages.toggleGroupCallSettings#e9723804 flags:# reset_invite_hash:flags.1?true call:InputGroupCall join_muted:flags.0?Bool messages_enabled:flags.2?Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **reset_invite_hash** | [`flags.1?true`](type/true) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| **join_muted** | [`flags.0?Bool`](type/Bool) | NOTHING |
| **messages_enabled** | [`flags.2?Bool`](type/Bool) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->toggleGroupCallSettings(
	reset_invite_hash : true,
	call : $client->inputGroupCall(
		id : 3952488287836910010,
		access_hash : 712963422447409376,
	),
	join_muted : false,
	messages_enabled : true,
);
```