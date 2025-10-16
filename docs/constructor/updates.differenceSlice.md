# updates.differenceSlice

**Description** : *Incomplete list of occurred events*

**Layer** : 216

```tl
updates.differenceSlice#a8fb1981 new_messages:Vector<Message> new_encrypted_messages:Vector<EncryptedMessage> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> intermediate_state:updates.State = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | List of new messages |
| <mark>new_encrypted_messages</mark> | [`Vector<EncryptedMessage>`](type/EncryptedMessage) | New messages from the encrypted event sequence |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in events |
| <mark>intermediate_state</mark> | [`updates.State`](type/updates.State) | Intermediary state |

---

## Type

[updates.Difference](type/updates.Difference)

---

## Example

```php
$updatesDifference = $client->updates->differenceSlice(
	new_messages : array(
		$client->messageEmpty(
			id : 39,
			peer_id : $client->peerUser(
				user_id : -8546552716426714403,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 75,
			from_id : $client->peerUser(
				user_id : 41333213262609451,
			),
			from_boosts_applied : 0,
			peer_id : $client->peerUser(
				user_id : -5389343367982236688,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6328377644904403365,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'SUezKhdEcLYjvlNF',
				date : 7,
				channel_post : 88,
				post_author : '4yTOgAwYWGBSbadm',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 51,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'NOCTEUq429shZwo0',
				saved_date : 55,
				psa_type : 'y40WZwS91tVUPDRA',
			),
			via_bot_id : -8277534606948033888,
			via_business_bot_id : -9109297329381728164,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 27,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 52,
				quote_text : 'Q04IxqnpjVb5rWva',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 0,
				todo_item_id : 57,
			),
			date : 97,
			message : 'tVU0AG7E5oXxw1p4',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 37,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 95,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 10,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 24,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 71,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 44,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 15,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 86,
					language : 'qW15DAQGHhXp7M38',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 58,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : 212635263709234345,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 44,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 80,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 0,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 29,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 51,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 45,
					document_id : 2784988864129929417,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 52,
				),
			),
			views : 73,
			forwards : 57,
			replies : $client->messageReplies(
				comments : true,
				replies : 99,
				replies_pts : 71,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 8204785362108706204,
				max_id : 25,
				read_max_id : 6,
			),
			edit_date : 56,
			post_author : 'erAB8z4KZkdTijIg',
			grouped_id : 152546367826104332,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'iyYrZOnwC3sIdp57',
					reason : 'yp4w7jaqNeItPA9l',
					text : 'Haju3XTL0vebAV4Z',
				),
			),
			ttl_period : 96,
			quick_reply_shortcut_id : 53,
			effect : -1128883787510876367,
			factcheck : $client->factCheck(
				need_check : true,
				country : '05dCNanW7JROuAsj',
				text : $client->textWithEntities(...),
				hash : 0,
			),
			report_delivery_until_date : 29,
			paid_message_stars : -3967248652952563368,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 18,
			),
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 62,
			from_id : $client->peerUser(
				user_id : -2882243671640109463,
			),
			peer_id : $client->peerUser(
				user_id : -5002032815985030618,
			),
			saved_peer_id : $client->peerUser(
				user_id : 9024228174436281244,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 6,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 27,
				quote_text : '7wk4UE5dALCQ10SW',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 56,
				todo_item_id : 49,
			),
			date : 4,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			ttl_period : 100,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -6383988073319177789,
			chat_id : 60,
			date : 65,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -7335734278271120675,
			chat_id : 86,
			date : 93,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 75,
				peer_id : $client->peerUser(...),
			),
			pts : 1,
			pts_count : 7,
		),
		$client->updateMessageID(
			id : 63,
			random_id : 7103513715398622066,
		),
		$client->updateDeleteMessages(
			messages : array(29),
			pts : 20,
			pts_count : 65,
		),
		$client->updateUserTyping(
			user_id : 1972897226021977132,
			top_msg_id : 74,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -5993471723154637410,
			from_id : $client->peerUser(
				user_id : -7876589119044138310,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -81626409938485496,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -5743202243018694747,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -308056195681540360,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 21,
			device : 'Nz21oUqnRu7QKbcZ',
			location : 'dwXy8LA05F4u1YcH',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 5449788181273402425,
				chat_id : 19,
				date : 56,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 46,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 93,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 73,
			),
			date : 92,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 30,
			max_date : 3,
			date : 68,
		),
		$client->updateChatParticipantAdd(
			chat_id : -7655076639560985668,
			user_id : -2070902535193803136,
			inviter_id : -5576914850346262784,
			date : 100,
			version : 35,
		),
		$client->updateChatParticipantDelete(
			chat_id : -995824234305484741,
			user_id : 3506243775691898219,
			version : 34,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 18,
					ip_address : '127.0.0.1',
					port : 4,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 81,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 94,
			type : 'cC1YUjfbZN02Ah9T',
			message : 'Lt5Awhl4s1iuZMKY',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 79,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 55,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 96,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 32,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 40,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 8,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 21,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 95,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 40,
					language : 'rJERuBH4aCPZ6LXS',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 15,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : 6902748251754515476,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 32,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 90,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 65,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 86,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 49,
					document_id : -6905560134178306839,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 11,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-2733165459458351629),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-641770545003723241),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-8398677973132183088),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-3423472893771136858),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 3480553102077026706,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 38,
			peer : $client->peerUser(
				user_id : 986265034909063549,
			),
			top_msg_id : 31,
			max_id : 81,
			still_unread_count : 74,
			pts : 40,
			pts_count : 20,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 2902794003843072075,
			),
			max_id : 84,
			pts : 79,
			pts_count : 47,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 1787412355807748129,
				url : 'https://docs.liveproto.dev',
			),
			pts : 67,
			pts_count : 10,
		),
		$client->updateReadMessagesContents(
			messages : array(62),
			pts : 42,
			pts_count : 73,
			date : 34,
		),
		$client->updateChannelTooLong(
			channel_id : -9134319652409720332,
			pts : 98,
		),
		$client->updateChannel(
			channel_id : -5151802782174546096,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 11,
				peer_id : $client->peerUser(...),
			),
			pts : 17,
			pts_count : 62,
		),
		$client->updateReadChannelInbox(
			folder_id : 52,
			channel_id : -8365574748778731790,
			max_id : 80,
			still_unread_count : 80,
			pts : 74,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 7740453683785489307,
			messages : array(19),
			pts : 52,
			pts_count : 39,
		),
		$client->updateChannelMessageViews(
			channel_id : -1061230657360040756,
			id : 10,
			views : 26,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 6999170865838479771,
			user_id : -6710265307078444121,
			is_admin : false,
			version : 99,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(-4193898288431488322),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 2208006123018641346,
			user_id : 6265719997282021540,
			query : 'nNzFmyw2Lo7TSD9O',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'TI5Vsup7USidYXrF',
		),
		$client->updateBotInlineSend(
			user_id : 1248182645206838787,
			query : 'jgO20owZIz5XAm8D',
			geo : $client->geoPointEmpty(),
			id : 'SXVTAN6fpykvDJWY',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 78,
				id : -99168987223975114,
				access_hash : -1989248769281974461,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 94,
				peer_id : $client->peerUser(...),
			),
			pts : 100,
			pts_count : 90,
		),
		$client->updateBotCallbackQuery(
			query_id : 2551219036958099819,
			user_id : 7288041014592973501,
			peer : $client->peerUser(
				user_id : -7057268836480326391,
			),
			msg_id : 59,
			chat_instance : -6400024059736751168,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'dhO3GT7oxeiE4ZRY',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(...),
			),
			pts : 30,
			pts_count : 81,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -473645006526679253,
			user_id : -7770581710732285943,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 95,
				id : 176928577160262851,
				access_hash : -8012154216141369831,
			),
			chat_instance : 5712197139332720170,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'QtiEbro9KsGWpZhP',
		),
		$client->updateReadChannelOutbox(
			channel_id : 6948115752497498898,
			max_id : 15,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 1456207269285385552,
			),
			top_msg_id : 41,
			saved_peer_id : $client->peerUser(
				user_id : 7633014440284004442,
			),
			draft : $client->draftMessageEmpty(
				date : 100,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 6546030970970606509,
			webpage : $client->webPageEmpty(
				id : -7665529912509844104,
				url : 'https://docs.liveproto.dev',
			),
			pts : 67,
			pts_count : 94,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 36,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 4,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 44,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'zAHdin14sUQ927pg',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -1107671154219207386,
			data : $client->dataJSON(
				data : 'czUBLJlK4tVsfyx2',
			),
			timeout : 50,
		),
		$client->updateBotShippingQuery(
			query_id : 524567846579023731,
			user_id : 1218883972591577064,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : '5nEN0AfcydbCreXp',
				street_line2 : '7tZaLpxeYbS9RTdy',
				city : 'j9d1NL0Hfh2xZrA3',
				state : 'yaeN6WZD08CGlvRt',
				country_iso2 : '1DKJWvmPLMyVBiHE',
				post_code : 'DTxcFsofU7Sm6n4z',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -1188569866637268563,
			user_id : 8324173995628730566,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'rlTwngzHLjv86dRx',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'MPgzl2tmYFj4Wh0r',
			currency : 'hbmlycsSLv34CaeQ',
			total_amount : -4940218160239994467,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -485071584661901305,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'Ot1QD9GshVBmLIwF',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'VXUJ0dPGEpnWRYeg',
				from_version : 79,
				version : 29,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 4727052902847324722,
			top_msg_id : 50,
			saved_peer_id : $client->peerUser(
				user_id : -5100170481547681302,
			),
			messages : array(42),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -7797433263669111821,
			available_min_id : 93,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -4143487048555832561,
			),
		),
		$client->updateMessagePoll(
			poll_id : 397593379100621457,
			poll : $client->poll(
				id : 2826202054372669074,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 79,
				close_date : 74,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 65,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'trxbOCPhjAgmT2dF',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -5558532937062189517,
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
				until_date : 24,
			),
			version : 69,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 48,
				),
			),
			pts : 42,
			pts_count : 64,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 5900342256433631024,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 41,
				request_chat_title : 'I3Hf9mV5XBJRSdEq',
				request_chat_date : 91,
				business_bot_id : -1439033103921032361,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 6795499564747756012,
				registration_month : 'hDtZfkjbP3VaL6HW',
				phone_country : '+1234567890',
				name_change_date : 77,
				photo_change_date : 30,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 10,
					distance : 45,
				),
				$client->peerSelfLocated(
					expires : 37,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 16,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 8439533352422370913,
			),
			messages : array(58),
			sent_messages : array(13),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 4003106185747178926,
				access_hash : 6938672498611489095,
				slug : 'N4iWxK791Y23oBfA',
				title : 'OqRQ6IVu4LS92yGY',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'F9ceK7PpRLxTvJ3Z',
				installs_count : 45,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -8295148262497452573,
			),
			msg_id : 33,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 5933606746085300760,
			peer : $client->peerUser(
				user_id : 9072497364341405483,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 27,
		),
		$client->updateDialogFilter(
			id : 74,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 57,
				title : $client->textWithEntities(...),
				emoticon : 'JK9ulD6Qv5tay2Ed',
				color : 10,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(74),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 8489144741299267370,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -1784487533256185074,
			id : 63,
			forwards : 73,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 9154738470414655397,
			top_msg_id : 24,
			read_max_id : 40,
			broadcast_id : -1164364431923228633,
			broadcast_post : 5,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -6801569461249245132,
			top_msg_id : 17,
			read_max_id : 81,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 6673920583096131108,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -8109647655720573965,
			top_msg_id : 95,
			from_id : $client->peerUser(
				user_id : -1010312895344960484,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -3590825410579905817,
			),
			messages : array(63),
			pts : 31,
			pts_count : 6,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 5575270160478810537,
			messages : array(53),
			pts : 32,
			pts_count : 40,
		),
		$client->updateChat(
			chat_id : 8856947019434442351,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -5471174515038719274,
				access_hash : -6429155875184289921,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 11,
					active_date : 77,
					source : 67,
					volume : 70,
					about : 'Lk2W6UOYVxwpISlK',
					raise_hand_rating : 6133184990612273271,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 12,
		),
		$client->updateGroupCall(
			chat_id : -122437303967324292,
			call : $client->groupCallDiscarded(
				id : -7233908921434995684,
				access_hash : 6068242313826665831,
				duration : 54,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 1838765448236445,
			),
			ttl_period : 43,
		),
		$client->updateChatParticipant(
			chat_id : 6422568905783825273,
			date : 87,
			actor_id : -4446766399262220377,
			user_id : 3427563275115782438,
			prev_participant : $client->chatParticipant(
				user_id : -453775544139108701,
				inviter_id : 960938006427197781,
				date : 91,
			),
			new_participant : $client->chatParticipant(
				user_id : -6767409414378284800,
				inviter_id : 2938353314279872747,
				date : 31,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'q4fVadp1IrP3sRXh',
				admin_id : -7845704239345127130,
				date : 8,
				start_date : 67,
				expire_date : 37,
				usage_limit : 35,
				usage : 23,
				requested : 45,
				subscription_expired : 12,
				title : '7mB9rpTSFcibWwXe',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 15,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -8189344897920404136,
			date : 21,
			actor_id : 209605438424117246,
			user_id : 3063779196996325288,
			prev_participant : $client->channelParticipant(
				user_id : -332991890295467402,
				date : 30,
				subscription_until_date : 16,
			),
			new_participant : $client->channelParticipant(
				user_id : -7102772818652342234,
				date : 51,
				subscription_until_date : 44,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Gi5p7M9qZYWSg10N',
				admin_id : -4004905527449591396,
				date : 68,
				start_date : 64,
				expire_date : 82,
				usage_limit : 24,
				usage : 27,
				requested : 65,
				subscription_expired : 18,
				title : 'A7qfWVuS4KJNDZRT',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 58,
		),
		$client->updateBotStopped(
			user_id : -7337402356521231774,
			date : 25,
			stopped : true,
			qts : 33,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'rR5xvbpQAwS7TMuY',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 657276453186637182,
			),
			bot_id : 5844991971150332923,
			commands : array(
				$client->botCommand(
					command : 'LoxDzBMwShUG04IQ',
					description : '2XBvYGWgK9RobwDe',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -2325179236631372489,
			),
			requests_pending : 91,
			recent_requesters : array(-4665663589397934139),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -4267395869682602040,
			),
			date : 71,
			user_id : -1871747508784772131,
			about : 'b7UrocFLHP91Xlja',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'QASZEy2HuMN0a4iY',
				admin_id : 8791945632920322618,
				date : 16,
				start_date : 90,
				expire_date : 76,
				usage_limit : 97,
				usage : 7,
				requested : 78,
				subscription_expired : 98,
				title : 'AB2CSRGtecToUir5',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 46,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -9045975204157051675,
			),
			msg_id : 23,
			top_msg_id : 96,
			saved_peer_id : $client->peerUser(
				user_id : 5137000683682754344,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -4312417977178048840,
		),
		$client->updateBotMenuButton(
			bot_id : 1259260671711978761,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -3465788692557990885,
			),
			msg_id : 2,
			transcription_id : 3135218289297668838,
			text : 'tOzcL1FhYn8AxfNC',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 4449817474203970289,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 2129669384625726772,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 2234226046755435517,
			),
			msg_id : 78,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 16,
					h : 16,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 99,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -5037882129190741935,
			topic_id : 26,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 2425019303674367513,
			order : array(94),
		),
		$client->updateUser(
			user_id : 2423979345108354710,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -347464095858832741,
			),
			story : $client->storyItemDeleted(
				id : 38,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 1699822548931144135,
			),
			max_id : 98,
		),
		$client->updateStoryID(
			id : 33,
			random_id : 7288720478617634498,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 22,
				cooldown_until_date : 53,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 8994056367323398657,
			),
			story_id : 80,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -528948038113657833,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'UwLDY1u9iZfh6lV4',
				user_id : -269199050438867520,
				giveaway_msg_id : 27,
				date : 62,
				expires : 38,
				used_gift_slug : 'on9aiRNeIDPM45OB',
				multiplier : 60,
				stars : 3008634649379260149,
			),
			qts : 74,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 8448655736314803243,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 4810216736701014728,
			),
			wallpaper : $client->wallPaper(
				id : 4356988758676890797,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -7375673784825480642,
				slug : 'Pp1sgS9auZweEoxf',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 467801748102664411,
			),
			msg_id : 28,
			date : 9,
			actor : $client->peerUser(
				user_id : 5212092394496665527,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'CHe5Db7OjJIlvEX2',
				),
				$client->reactionCustomEmoji(
					document_id : -1440482930439981869,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'frjOWqsIo9yXi2nL',
				),
				$client->reactionCustomEmoji(
					document_id : 6321239039183847473,
				),
				$client->reactionPaid(),
			),
			qts : 48,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -4930241369546525933,
			),
			msg_id : 56,
			date : 75,
			reactions : array(
				$client->reactionCount(
					chosen_order : 57,
					reaction : $client->reactionEmpty(...),
					count : 29,
				),
			),
			qts : 17,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 14,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : '7jyvRpaDBi3mtGL8',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 83,
					shortcut : 'og7Re4z9QZNdOscV',
					top_message : 10,
					count : 58,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 57,
				shortcut : 'dnByNlQjexqoD452',
				top_message : 73,
				count : 69,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 22,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 6,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 9,
			messages : array(10),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : '70WarSoF5lI9gVMn',
				user_id : 3983556650698029704,
				dc_id : 59,
				date : 82,
				rights : $client->businessBotRights(...),
			),
			qts : 93,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'FEv9OcXV4BSHuUMN',
			message : $client->messageEmpty(
				id : 74,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 61,
				peer_id : $client->peerUser(...),
			),
			qts : 25,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'MYeu5oZGHDqO7AET',
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 43,
				peer_id : $client->peerUser(...),
			),
			qts : 47,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'bY4NAceyJIUGqMvf',
			peer : $client->peerUser(
				user_id : -8949740262643775114,
			),
			messages : array(61),
			qts : 65,
		),
		$client->updateNewStoryReaction(
			story_id : 73,
			peer : $client->peerUser(
				user_id : -8729681567582236309,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 5561845722037856986,
				nanos : 74,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -3816798744158661652,
			user_id : 3752517174242811600,
			connection_id : 'ATL6pthaFcx4P2yU',
			message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 19,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 8193339815001163314,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 8147279400592664432,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 88,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -2104642350100139043,
			payload : '9cIPsGkgTKdAZjpo',
			qts : 87,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 82,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 4761892909800042901,
				access_hash : -7083086732810183441,
			),
			sub_chain_id : 45,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 83,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 3798534653984430635,
			saved_peer_id : $client->peerUser(
				user_id : -1878532475770133940,
			),
			read_max_id : 37,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 2911284920330690504,
			saved_peer_id : $client->peerUser(
				user_id : 7076953989809664977,
			),
			read_max_id : 15,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -4226861162585479885,
			saved_peer_id : $client->peerUser(
				user_id : -7722987745862439746,
			),
		),
		$client->updatePinnedForumTopic(
			pinned : 48,
			peer : $client->peerUser(
				user_id : 3894429513021602380,
			),
			topic_id : 14,
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -5770917758089080160,
				access_hash : -2024600221200040032,
			),
			from_id : $client->peerUser(
				user_id : 4008192904405328186,
			),
			random_id : 7351731639961532055,
			message : $client->textWithEntities(
				text : 'ahwASmxr8b3fR5Pk',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -1211700315049261035,
			text : 'TZ5v3PJsdyb1VjOK',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 7753437854529745993,
			payload : 'EdaD6wTAv5RWpLsY',
			until_date : 19,
			qts : 30,
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -1207103466418696724,
				access_hash : 1123884733863509236,
			),
			from_id : $client->peerUser(
				user_id : 2390414351354352062,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 50522529158549304,
			),
			order : array(38),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4695810280301360509,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2095033289332890659,
			title : 'LXURuVen3v62zs8T',
			photo : $client->chatPhotoEmpty(),
			participants_count : 53,
			date : 61,
			version : 28,
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
				until_date : 62,
			),
		),
		$client->chatForbidden(
			id : -7198041553769836158,
			title : 'ln5eLdtYQ4KUGEFv',
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
			id : 8252591361276729564,
			access_hash : -4431431772462112082,
			title : 'rA2STGuCgxw5FYWf',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TDOQ3SLKst28kp0y',
					reason : 'm4fdLKHcFapAQO73',
					text : 'AfneUj10CQPt6ubE',
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
				until_date : 42,
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
				until_date : 56,
			),
			participants_count : 67,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 11,
			color : $client->peerColor(
				color : 25,
				background_emoji_id : -800463312466502522,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : -5590365352219604266,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 41,
			subscription_until_date : 60,
			bot_verification_icon : 3384615306597364598,
			send_paid_messages_stars : -1214131744515267093,
			linked_monoforum_id : -2653394878830305158,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -121151434892149485,
			access_hash : 6445075083282539516,
			title : '9cUkTBQVn70NzdZO',
			until_date : 71,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3687209852099936574,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : 3874036930757729993,
			access_hash : -6008378821321690222,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 89,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TDYp9XdagF1ZzyI0',
					reason : 'fYS6wUNvBmroedTj',
					text : 'N7x3KHDLX6bTujWd',
				),
			),
			bot_inline_placeholder : '5B16xWXOFmsPISjq',
			lang_code : 'cfubTsVw4Mm70t2k',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 52,
			color : $client->peerColor(
				color : 55,
				background_emoji_id : -8513191048198005408,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : -5418653276495734647,
			),
			bot_active_users : 71,
			bot_verification_icon : -2561039628217610139,
			send_paid_messages_stars : -9180317784592131331,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 81,
		qts : 24,
		date : 93,
		seq : 11,
		unread_count : 55,
	),
);
```