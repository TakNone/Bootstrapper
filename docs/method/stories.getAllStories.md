# stories.getAllStories

**Description** : *Fetch the List of active \(or active and hidden\) stories, see here &raquo; for more info on watching stories*

**Layer** : 218

```tl
stories.getAllStories#eeb0d625 flags:# next:flags.1?true hidden:flags.2?true state:flags.0?string = stories.AllStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **next** | [`flags.1?true`](type/true) | If next and state are both set, uses the passed state to paginate to the next results; if neither state nor next are set, fetches the initial page; if state is set and next is not set, check for changes in the active/hidden peerset, see here » for more info on the full flow |
| **hidden** | [`flags.2?true`](type/true) | If set, fetches the hidden active story list, otherwise fetches the active story list, see here » for more info on the full flow |
| **state** | [`flags.0?string`](type/string) | If next and state are both set, uses the passed state to paginate to the next results; if neither state nor next are set, fetches the initial page; if state is set and next is not set, check for changes in the active/hidden peerset, see here » for more info on the full flow |

---

## Result

[stories.AllStories](type/stories.AllStories)

---

## Example

```php
$storiesAllStories = $client->stories->getAllStories(
	next : true,
	hidden : true,
	state : 'cTWksgDyrvEq3a7M',
);
```