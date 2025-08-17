# account.contentSettings

**Description** : *Sensitive content settings*

**Layer** : 211

```tl
account.contentSettings#57e28221 flags:# sensitive_enabled:flags.0?true sensitive_can_change:flags.1?true = account.ContentSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **sensitive_enabled** | [`flags.0?true`](type/true) | Whether viewing of sensitive (NSFW) content is enabled |
| **sensitive_can_change** | [`flags.1?true`](type/true) | Whether the current client can change the sensitive content settings to view NSFW content |

---

## Type

[account.ContentSettings](type/account.ContentSettings)

---

## Example

```php
$accountContentSettings = $client->account->contentSettings(
	sensitive_enabled : true,
	sensitive_can_change : true,
);
```