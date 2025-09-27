# phone.exportedGroupCallInvite

**Description** : *An invite to a group call or livestream*

**Layer** : 216

```tl
phone.exportedGroupCallInvite#204bd158 link:string = phone.ExportedGroupCallInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>link</mark> | [`string`](type/string) | Invite link |

---

## Type

[phone.ExportedGroupCallInvite](type/phone.ExportedGroupCallInvite)

---

## Example

```php
$phoneExportedGroupCallInvite = $client->phone->exportedGroupCallInvite(
	link : 'jd6IqbMOxgNZiAoh',
);
```