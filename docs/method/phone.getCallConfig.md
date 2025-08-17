# phone.getCallConfig

**Description** : *Get phone call configuration to be passed to libtgvoip's shared config*

**Layer** : 211

```tl
phone.getCallConfig#55451fa9 = DataJSON;
```

---

## Result

[DataJSON](type/DataJSON)

---

## Example

```php
$dataJSON = $client->phone->getCallConfig();
```