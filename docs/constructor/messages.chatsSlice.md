# messages.chatsSlice

**Description** : *Partial list of chats, more would have to be fetched with pagination*

**Layer** : 216

```tl
messages.chatsSlice#9cd81144 count:int chats:Vector<Chat> = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of results that were found server-side (not all are included in chats) |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |

---

## Type

[messages.Chats](type/messages.Chats)

---

## Example

```php
$messagesChats = $client->messages->chatsSlice(
	count : 88,
	chats : array(
		$client->chatEmpty(
			id : 3694304387317635269,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6331190718515986714,
			title : 'garshyIFqHtjmN5w',
			photo : $client->chatPhotoEmpty(),
			participants_count : 16,
			date : 30,
			version : 87,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 92,
			),
		),
		$client->chatForbidden(
			id : 1535233146115692364,
			title : 'asNAgvKnSxVrEYO0',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -1705387033441202277,
			access_hash : 9091356817724591070,
			title : '9rLsEGUazwuASjJQ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 27,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'AcjYkKzEqZIHN1be',
					reason : '17TseOKoGuNZYXEf',
					text : 'wNj7yQFPVaACdr3Z',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 30,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 9,
			),
			participants_count : 59,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 96,
			color : $client->peerColor(
				color : 60,
				background_emoji_id : 2087285591315853080,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : 5010592783829986024,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 43,
			subscription_until_date : 48,
			bot_verification_icon : -5780941746917840074,
			send_paid_messages_stars : -5124571924444086714,
			linked_monoforum_id : 610538439698291181,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8579627920908305139,
			access_hash : 2868076361223969377,
			title : 'uT2xqcZ9BOwJb40N',
			until_date : 57,
		),
	),
);
```