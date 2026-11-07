# inputInlineButtonTypeUserProfile

**Layer** : 233

```tl
inputInlineButtonTypeUserProfile#53f3ce5a user_id:InputUser = InlineButtonType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | NOTHING |

---

## Type

[InlineButtonType](type/InlineButtonType)

---

## Example

```php
$inlineButtonType = $client->inputInlineButtonTypeUserProfile(
	user_id : $client->get_input_user(user : '@TakNone'),
);
```