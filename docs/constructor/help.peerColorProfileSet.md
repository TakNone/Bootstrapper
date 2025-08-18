# help.peerColorProfileSet

**Description** : *Represents a color palette that can be used in profile pages &raquo;*

**Layer** : 211

```tl
help.peerColorProfileSet#767d61eb palette_colors:Vector<int> bg_colors:Vector<int> story_colors:Vector<int> = help.PeerColorSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>palette_colors</mark> | [`Vector<int>`](type/int) | A list of 1-2 colors in RGB format, shown in the color palette settings to describe the current palette |
| <mark>bg_colors</mark> | [`Vector<int>`](type/int) | A list of 1-2 colors in RGB format describing the colors used to generate the actual background used in the profile page |
| <mark>story_colors</mark> | [`Vector<int>`](type/int) | A list of 2 colors in RGB format describing the colors of the gradient used for the unread active story indicator around the profile photo |

---

## Type

[help.PeerColorSet](type/help.PeerColorSet)

---

## Example

```php
$helpPeerColorSet = $client->help->peerColorProfileSet(
	palette_colors : array(68),
	bg_colors : array(47),
	story_colors : array(3),
);
```