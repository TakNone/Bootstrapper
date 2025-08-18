# help.getAppUpdate

**Description** : *Returns information on update availability for the current application*

**Layer** : 211

```tl
help.getAppUpdate#522d5a7d source:string = help.AppUpdate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>source</mark> | [`string`](type/string) | Source |

---

## Result

[help.AppUpdate](type/help.AppUpdate)

---

## Example

```php
$helpAppUpdate = $client->help->getAppUpdate(
	source : '6EKFr0cOfbRtJa2d',
);
```