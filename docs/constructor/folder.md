# folder

**Description** : *Folder*

**Layer** : 216

```tl
folder#ff544e65 flags:# autofill_new_broadcasts:flags.0?true autofill_public_groups:flags.1?true autofill_new_correspondents:flags.2?true id:int title:string photo:flags.3?ChatPhoto = Folder;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **autofill_new_broadcasts** | [`flags.0?true`](type/true) | Automatically add new channels to this folder |
| **autofill_public_groups** | [`flags.1?true`](type/true) | Automatically add joined new public supergroups to this folder |
| **autofill_new_correspondents** | [`flags.2?true`](type/true) | Automatically add new private chats to this folder |
| <mark>id</mark> | [`int`](type/int) | Folder ID |
| <mark>title</mark> | [`string`](type/string) | Folder title |
| **photo** | [`flags.3?ChatPhoto`](type/ChatPhoto) | Folder picture |

---

## Type

[Folder](type/Folder)

---

## Example

```php
$folder = $client->folder(
	autofill_new_broadcasts : true,
	autofill_public_groups : true,
	autofill_new_correspondents : true,
	id : 68,
	title : 'f0MUFW4xbYAIqsy2',
	photo : $client->chatPhotoEmpty(),
);
```