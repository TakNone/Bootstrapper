# updates

**Description** : *Full constructor of updates*

**Layer** : 222

```tl
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Total number of sent updates |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updates(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 18,
				peer_id : $client->peerUser(
					user_id : -6869713490393189644,
				),
			),
			pts : 21,
			pts_count : 99,
		),
		$client->updateMessageID(
			id : 81,
			random_id : -4751408393143848831,
		),
		$client->updateDeleteMessages(
			messages : array(96),
			pts : 97,
			pts_count : 81,
		),
		$client->updateUserTyping(
			user_id : 5565572305793066852,
			top_msg_id : 7,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -9188689053711036940,
			from_id : $client->peerUser(
				user_id : -3879977443321384615,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 5571895922958401139,
				self_participant : $client->chatParticipant(
					user_id : -456895241468081364,
					inviter_id : -2171987629631838416,
					date : 70,
				),
			),
		),
		$client->updateUserStatus(
			user_id : 1463276793237220682,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 479169055240024434,
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
			date : 67,
			device : 'DIvpByREAc1gPdfl',
			location : '0xPrlM6R7J5DALqg',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 3450618525025633588,
				chat_id : 51,
				date : 34,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 76,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 95,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 5,
			),
			date : 20,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 46,
			max_date : 75,
			date : 87,
		),
		$client->updateChatParticipantAdd(
			chat_id : -5294525881908203570,
			user_id : -9142451931510691114,
			inviter_id : -585031243436712939,
			date : 20,
			version : 13,
		),
		$client->updateChatParticipantDelete(
			chat_id : -2652534117806900174,
			user_id : -455438991653520543,
			version : 84,
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
					id : 83,
					ip_address : '127.0.0.1',
					port : 95,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 3123433831099805724,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 12,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 33,
			type : 'DzwtUW1fVgL4Jk09',
			message : 'p2xci1orbMUahzTs',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 19,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 35,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 32,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 80,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 22,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 66,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 22,
					language : 'imopel7ugvV24C0T',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 34,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 31,
					user_id : -8969628291096671398,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 17,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 90,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 23,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 39,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 85,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 14,
					document_id : -506281345546885073,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 66,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-7727360584757679267),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(4720786869011191267),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(1051837500731937574),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5838552159477556301),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -7954868206736193645,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 1,
			peer : $client->peerUser(
				user_id : 1206104678325001336,
			),
			top_msg_id : 34,
			max_id : 48,
			still_unread_count : 31,
			pts : 77,
			pts_count : 95,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -8794380053642097585,
			),
			max_id : 3,
			pts : 49,
			pts_count : 39,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -6099502154782398925,
				url : 'https://docs.liveproto.dev',
			),
			pts : 51,
			pts_count : 26,
		),
		$client->updateReadMessagesContents(
			messages : array(74),
			pts : 26,
			pts_count : 72,
			date : 16,
		),
		$client->updateChannelTooLong(
			channel_id : 2693705139472113681,
			pts : 98,
		),
		$client->updateChannel(
			channel_id : -6331548465188405198,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 32,
				peer_id : $client->peerUser(
					user_id : 3327942686691890441,
				),
			),
			pts : 99,
			pts_count : 5,
		),
		$client->updateReadChannelInbox(
			folder_id : 43,
			channel_id : -1807761327891814283,
			max_id : 9,
			still_unread_count : 21,
			pts : 26,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -2219429925983084697,
			messages : array(98),
			pts : 7,
			pts_count : 63,
		),
		$client->updateChannelMessageViews(
			channel_id : -79663328906258956,
			id : 24,
			views : 34,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 1549645859479496747,
			user_id : -5103418946640013767,
			is_admin : false,
			version : 21,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 10,
					id : -66988287654888393,
					access_hash : -3854454606547660803,
					title : 'ozK3W1f6GxZhaEg7',
					short_name : 'mOHlKBWeVky0dnb4',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 52,
					thumb_version : 66,
					thumb_document_id : -3787127476846088020,
					count : 41,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'Wtlsj3I2TdXgwmGH',
						documents : array(-368389787204449868),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -813598138723782704,
						keyword : array('CRypU9tAbwIfhlE8'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -5910273216629414393,
					),
					$client->document(
						id : -6787258889685864946,
						access_hash : 7209427286605953462,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 82,
						mime_type : 'AZ0rxuWRyesivL4B',
						size : 2090919361543977378,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 6,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(-7179848995633438613),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 8796036700194805699,
			user_id : -6633732434458063431,
			query : 'avh8JgMxmj5sX7N1',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'UvxdGb1kepy2cWtX',
		),
		$client->updateBotInlineSend(
			user_id : 4429512086223947030,
			query : 'F2sA5rKP3aGyiI7d',
			geo : $client->geoPointEmpty(),
			id : 'unDe3kmrFvylc462',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 33,
				id : -1584407484000336340,
				access_hash : -5451299096674544530,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 73,
				peer_id : $client->peerUser(
					user_id : -5409208253326006353,
				),
			),
			pts : 11,
			pts_count : 97,
		),
		$client->updateBotCallbackQuery(
			query_id : -8678085471605320393,
			user_id : 2181466841751668436,
			peer : $client->peerUser(
				user_id : 1277543645101977651,
			),
			msg_id : 64,
			chat_instance : 2772803694067222076,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '9EPJkmBru3ztxQLK',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(
					user_id : -2612077958534587240,
				),
			),
			pts : 43,
			pts_count : 20,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 7235904086415504668,
			user_id : -9130487635299923773,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 77,
				id : -173279159218262140,
				access_hash : -7336979396593393694,
			),
			chat_instance : 1122246454968102543,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '67AQK8l21JdVnRu9',
		),
		$client->updateReadChannelOutbox(
			channel_id : 119377290383708765,
			max_id : 72,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 7749465207251601167,
			),
			top_msg_id : 46,
			saved_peer_id : $client->peerUser(
				user_id : 2347822073203763036,
			),
			draft : $client->draftMessageEmpty(
				date : 71,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -1633393122972853996,
			webpage : $client->webPageEmpty(
				id : 6505775568717132380,
				url : 'https://docs.liveproto.dev',
			),
			pts : 52,
			pts_count : 91,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 29,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 6826187808767099487,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 14,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 3772768963635114350,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 86,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : '5vMd6VetUDuag17o',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -2285536773697639606,
			data : $client->dataJSON(
				data : 'R0MHtomVUr21x3DQ',
			),
			timeout : 76,
		),
		$client->updateBotShippingQuery(
			query_id : 5448071981119932434,
			user_id : -3895488607766560582,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'iKRM0jem9cyTPdpW',
				street_line2 : 'NKmlagIrcRHwoepQ',
				city : 'w9nrN0PmexHgtaQi',
				state : 'Lf4ioDASeY70t8my',
				country_iso2 : 'U4TCui0slmGSc9HJ',
				post_code : 'W09tCJOFQnj1Bz3g',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 7434808513153586430,
			user_id : -2036264756309397526,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'vbpNt1zDCYZT2JyW',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'TXSDzp7yk4N5EHgL',
					street_line2 : 'JCFVgosAaZ2WTzeR',
					city : 'eNZzk3poBKcxYWvw',
					state : '264qivLarWpBns9D',
					country_iso2 : 'ahEIUqV4CNg9OkSv',
					post_code : 'rcXJvl0SEy4Z3pd1',
				),
			),
			shipping_option_id : 'pm3TltaVzngvDqEh',
			currency : '1VPbyfrQJ4LXsvDS',
			total_amount : -5074550526994679391,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -854452819236296767,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'NZRXexhaHzF9Q3yA',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'fKnPskMUbqOVmBo6',
				from_version : 92,
				version : 48,
				strings : array(
					$client->langPackString(
						key : 'wj0REl1Nxe5IUgdq',
						value : 'QmgcUMV6NDjAfSeO',
					),
					$client->langPackStringPluralized(
						key : 'spv6coNAEDQ3kMVu',
						zero_value : 'VzRIWofOv4gEs7cb',
						one_value : 'N4qt8T2i6SpdCXxB',
						two_value : 'ahC52ZoLmr6bBAcv',
						few_value : 'rbJy97Op3zdAxaMq',
						many_value : '6Rhw9NgMq51sT8LZ',
						other_value : 'KZJWHivw7aESoDYI',
					),
					$client->langPackStringDeleted(
						key : 'F4tm2TxPdiSQ6cIB',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 5265518419845714521,
			top_msg_id : 88,
			saved_peer_id : $client->peerUser(
				user_id : -5733952337528523701,
			),
			messages : array(19),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -1137087602575120336,
			available_min_id : 53,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -4475303564974270152,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 68771309589398244,
			),
		),
		$client->updateMessagePoll(
			poll_id : -7830850402061673764,
			poll : $client->poll(
				id : -3811629223778700711,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'kAdhbxGwQzvNtnpF',
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
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				close_period : 94,
				close_date : 81,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 37,
					),
				),
				total_voters : 100,
				recent_voters : array(
					$client->peerUser(
						user_id : -3946976097609959320,
					),
					$client->peerChat(
						chat_id : -8297997292962500979,
					),
					$client->peerChannel(
						channel_id : -7028966790731654518,
					),
				),
				solution : 'YZd7D4BOQPqFmo5h',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 99,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 32,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 59,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 9,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 6,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 16,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 85,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 48,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 71,
						language : 'HleGZU9X7NmJRL5a',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 82,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 71,
						user_id : 3625879602317354009,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 32,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 34,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 25,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 55,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 84,
						document_id : 467063126980603966,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 1,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 3125727756072239676,
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
				until_date : 5,
			),
			version : 5,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 5042424456301343073,
					),
					folder_id : 88,
				),
			),
			pts : 100,
			pts_count : 53,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -5924431096381675518,
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
				geo_distance : 95,
				request_chat_title : 'Q9uOITltkFsJnfZb',
				request_chat_date : 35,
				business_bot_id : 7274986877854366141,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -7625626778976612947,
				registration_month : 'UNHJ8bxVYj4D0TK5',
				phone_country : '+1234567890',
				name_change_date : 40,
				photo_change_date : 74,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 4157111904000619121,
					),
					expires : 89,
					distance : 99,
				),
				$client->peerSelfLocated(
					expires : 75,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 71,
				peer_id : $client->peerUser(
					user_id : 8367201936995693849,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 2934967620673803530,
			),
			messages : array(87),
			sent_messages : array(98),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 8852615907950922702,
				access_hash : 144678114375237614,
				slug : 'EiX1mzMptW3LSNac',
				title : 'PnUJLYpVcdWfmAqv',
				document : $client->documentEmpty(
					id : -6984355799923484499,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 48,
						outbox_accent_color : 66,
						message_colors : array(67),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'AML54CQhJvwBKaq3',
				installs_count : 91,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 7559145836239522421,
			),
			msg_id : 52,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 7116016645940245738,
			peer : $client->peerUser(
				user_id : 3621746806517188118,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 13,
		),
		$client->updateDialogFilter(
			id : 53,
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
				id : 93,
				title : $client->textWithEntities(
					text : 'x3cil9Lw8SNURsM1',
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
				emoticon : 'ukDCVrUq9QtzlRXi',
				color : 4,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(94),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 4308254132712065752,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -2760155878833705967,
			id : 95,
			forwards : 20,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 5814702942921627780,
			top_msg_id : 83,
			read_max_id : 28,
			broadcast_id : -4132694041135751372,
			broadcast_post : 93,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -8910172772169189853,
			top_msg_id : 20,
			read_max_id : 39,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -5628831568049400455,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -8198790274486201895,
			top_msg_id : 73,
			from_id : $client->peerUser(
				user_id : -6108478408003864023,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -4707406537011853715,
			),
			messages : array(14),
			pts : 30,
			pts_count : 94,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -6019168965663095659,
			messages : array(52),
			pts : 59,
			pts_count : 62,
		),
		$client->updateChat(
			chat_id : 8248325014109572348,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 6011532216509239605,
				access_hash : -5718975998525558615,
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
					peer : $client->peerUser(
						user_id : -5639856523373406504,
					),
					date : 53,
					active_date : 23,
					source : 56,
					volume : 50,
					about : '0KysTaISwoCZq4OB',
					raise_hand_rating : 8209739319417551584,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'QCeK2TxAscZE5w74',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 5,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'V3XKmFGJpDgxdvCo',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 94,
					),
					paid_stars_total : 8987364581779358520,
				),
			),
			version : 6,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -3117033432215875892,
			),
			call : $client->groupCallDiscarded(
				id : -1081782374564417323,
				access_hash : -7184326672274194774,
				duration : 98,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -2582149542243949341,
			),
			ttl_period : 40,
		),
		$client->updateChatParticipant(
			chat_id : 8662035266636381199,
			date : 85,
			actor_id : 8343313395870172388,
			user_id : -2418695124638748484,
			prev_participant : $client->chatParticipant(
				user_id : 7353084455534518587,
				inviter_id : 3781694480592084131,
				date : 33,
			),
			new_participant : $client->chatParticipant(
				user_id : 8335894131451681898,
				inviter_id : -8804623542516440512,
				date : 69,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'fTmpEbPZo6L2IqXk',
				admin_id : -4391870191071547931,
				date : 65,
				start_date : 47,
				expire_date : 40,
				usage_limit : 27,
				usage : 54,
				requested : 81,
				subscription_expired : 99,
				title : 'aqx5prK4YFEcVwH9',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 47,
					amount : -2671617312544775972,
				),
			),
			qts : 64,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -6053258829737081667,
			date : 21,
			actor_id : -13439729743779791,
			user_id : 1371904273143086471,
			prev_participant : $client->channelParticipant(
				user_id : -558779122038504494,
				date : 27,
				subscription_until_date : 74,
			),
			new_participant : $client->channelParticipant(
				user_id : -1047183367181462861,
				date : 83,
				subscription_until_date : 73,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'VwMaAXNSG8TOslHh',
				admin_id : -6931183889352653220,
				date : 63,
				start_date : 78,
				expire_date : 39,
				usage_limit : 36,
				usage : 46,
				requested : 30,
				subscription_expired : 50,
				title : '5yLUf1MbXOgYHWCn',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 12,
					amount : -8180053151246628802,
				),
			),
			qts : 13,
		),
		$client->updateBotStopped(
			user_id : 3401109565697374883,
			date : 18,
			stopped : false,
			qts : 74,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'SRnKN5tob4sEPfFq',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -9078633196067650188,
			),
			bot_id : -9211268146422166156,
			commands : array(
				$client->botCommand(
					command : 'MzxVdS6Ne0rW2Hlw',
					description : 'b951BGnzAjNLY8DR',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 758476370990747698,
			),
			requests_pending : 96,
			recent_requesters : array(2811789218461622940),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -6521646290780985239,
			),
			date : 84,
			user_id : 5965412975339244548,
			about : 'PGfXwDZMx6gzkd1i',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'nAWTZo3Pd7tVe1Qf',
				admin_id : 1894232610275509704,
				date : 53,
				start_date : 27,
				expire_date : 7,
				usage_limit : 46,
				usage : 32,
				requested : 67,
				subscription_expired : 90,
				title : 'Q85ZyAeBjnmIKwlo',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 68,
					amount : -3318553428228344393,
				),
			),
			qts : 82,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -3782231303745462260,
			),
			msg_id : 23,
			top_msg_id : 41,
			saved_peer_id : $client->peerUser(
				user_id : 2291325228112730553,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 66,
						reaction : $client->reactionEmpty(...),
						count : 8,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 34,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 77,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -5002992282100534230,
		),
		$client->updateBotMenuButton(
			bot_id : 2492096687798158219,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -2437349886443148151,
			),
			msg_id : 26,
			transcription_id : -4147800930280151014,
			text : 'mRi7ZTxbs3JWX4Fo',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -697234953929845743,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -9100098702083407770,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 7115571111561622998,
			),
			msg_id : 65,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 9,
					h : 96,
					thumb : $client->photoSizeEmpty(
						type : 'FfLnzbDe634dZstT',
					),
					video_duration : 62,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 4339686224203118764,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 5826441661095715121,
			),
			story : $client->storyItemDeleted(
				id : 5,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -7223880921021918174,
			),
			max_id : 92,
		),
		$client->updateStoryID(
			id : 42,
			random_id : 4885225635941173248,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 77,
				cooldown_until_date : 85,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 7039040966441396314,
			),
			story_id : 54,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 4982074331113285474,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'KYqja20dkrswWX9R',
				user_id : 3376231083594611668,
				giveaway_msg_id : 36,
				date : 2,
				expires : 85,
				used_gift_slug : '4ZOozNb1LBtuYFI2',
				multiplier : 68,
				stars : -6246509326565049730,
			),
			qts : 19,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -3362912089123531651,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 7363397744660696482,
			),
			wallpaper : $client->wallPaper(
				id : 3183907762602734514,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -1446483391064547420,
				slug : 'K4lRB7nxpZWjoyw6',
				document : $client->documentEmpty(
					id : -590376641956957816,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 96,
					second_background_color : 16,
					third_background_color : 44,
					fourth_background_color : 50,
					intensity : 43,
					rotation : 23,
					emoticon : 'GWaXY1jwby3sVf5L',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -5317579527761104526,
			),
			msg_id : 82,
			date : 5,
			actor : $client->peerUser(
				user_id : 70124090463566872,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 't5kxc23Xfw40JGEA',
				),
				$client->reactionCustomEmoji(
					document_id : 6574875276101969722,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'fIio8b7tRKlAQgrn',
				),
				$client->reactionCustomEmoji(
					document_id : -1195936595477736357,
				),
				$client->reactionPaid(),
			),
			qts : 91,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 8288795282951748572,
			),
			msg_id : 4,
			date : 58,
			reactions : array(
				$client->reactionCount(
					chosen_order : 32,
					reaction : $client->reactionEmpty(),
					count : 83,
				),
			),
			qts : 1,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 2689269268467200167,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -2181161739997519984,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 68,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'tojQvSRAzmnPYL4M',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 62,
					shortcut : 'CHvVLk5AdSXDwpIO',
					top_message : 83,
					count : 72,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 11,
				shortcut : 'cToEMxIa7e8hrNPz',
				top_message : 49,
				count : 100,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 87,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 33,
				peer_id : $client->peerUser(
					user_id : -462196652793210279,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 77,
			messages : array(11),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'pHYh5qclVKsW48X0',
				user_id : 3885209195301787438,
				dc_id : 22,
				date : 26,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 81,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'B6nUrpd9jykw1CbP',
			message : $client->messageEmpty(
				id : 49,
				peer_id : $client->peerUser(
					user_id : -6648339669713199951,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 53,
				peer_id : $client->peerUser(
					user_id : -8743575247500570300,
				),
			),
			qts : 62,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'reOJzFEZkah1Injy',
			message : $client->messageEmpty(
				id : 35,
				peer_id : $client->peerUser(
					user_id : -869535600580212914,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(
					user_id : 3524161982857123574,
				),
			),
			qts : 52,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'ItPy1rES9V7fbAmJ',
			peer : $client->peerUser(
				user_id : 7779938287908501968,
			),
			messages : array(23),
			qts : 44,
		),
		$client->updateNewStoryReaction(
			story_id : 82,
			peer : $client->peerUser(
				user_id : -1448207530955028142,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -6689336932648938209,
				nanos : 71,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -6707419345223038191,
			user_id : 8764103876981926029,
			connection_id : 'JkEoY4ezO1DvfcaT',
			message : $client->messageEmpty(
				id : 91,
				peer_id : $client->peerUser(
					user_id : 8815143708073475059,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : -246028910567897523,
				),
			),
			chat_instance : -935349856792337181,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -5813201961497615699,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -8601671141533578602,
					nanos : 91,
				),
				available_balance : $client->starsAmount(
					amount : -4579487828613553972,
					nanos : 1,
				),
				overall_revenue : $client->starsAmount(
					amount : -9818335169305962,
					nanos : 38,
				),
				next_withdrawal_at : 80,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -7220092996281737414,
			payload : 'T1KjPEZ4v5INz98D',
			qts : 91,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 10,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 0,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 8781964381865234765,
				access_hash : -3727310887462398071,
			),
			sub_chain_id : 40,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 74,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -1251275813424486724,
			saved_peer_id : $client->peerUser(
				user_id : 8704951530161492500,
			),
			read_max_id : 76,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 2378427366761709473,
			saved_peer_id : $client->peerUser(
				user_id : 805358591358989563,
			),
			read_max_id : 82,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 8900823884685341882,
			saved_peer_id : $client->peerUser(
				user_id : 1168802663220342689,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 7680406189843473742,
				access_hash : 2725968939774040665,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 40,
				from_id : $client->peerUser(
					user_id : 4092168888261613035,
				),
				date : 75,
				message : $client->textWithEntities(
					text : 'csRe2zuQ5ZdbGyUY',
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
				paid_message_stars : 8945258736886444041,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -4040416615461140287,
				access_hash : -1460571152433189450,
			),
			from_id : $client->peerUser(
				user_id : -7294122796696320534,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 2644832974491955354,
			),
			topic_id : 16,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -4948371832381300579,
			),
			order : array(90),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -4129542860584007963,
				access_hash : -8336741895062491357,
			),
			messages : array(45),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -8601924354967475071,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 1428465227830353545,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -2212279452299617469,
				bid_date : 75,
				min_bid_amount : -33101515764081346,
				bid_peer : $client->peerUser(
					user_id : 3458799089625174497,
				),
				acquired_count : 44,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
	),
	users : array(
		$client->userEmpty(
			id : 1411103983886585141,
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
			bot_forum_can_manage_topics : true,
			id : 600941552038558169,
			access_hash : 6550244574168663472,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 37,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'n590d4XNSBMCGsUg',
					reason : 'GYLxEWKkuzQpRyft',
					text : 'ldHO3SUmAj67paQT',
				),
			),
			bot_inline_placeholder : 'ha39Z7obTO1CnVcq',
			lang_code : '2bP0hanjx8Ilg4uo',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 81,
			),
			color : $client->peerColor(
				color : 49,
				background_emoji_id : -8311773008670941175,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : 3202415616547097550,
			),
			bot_active_users : 37,
			bot_verification_icon : 6226596170363634322,
			send_paid_messages_stars : 4940725786427641946,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5694902139107680105,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8374294217846022319,
			title : 'X8n9J1dOSZ4zQTbG',
			photo : $client->chatPhotoEmpty(),
			participants_count : 32,
			date : 69,
			version : 41,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 35,
			),
		),
		$client->chatForbidden(
			id : -7865940754645434585,
			title : 'FKdiRDC5STvk3uIy',
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
			id : 6766381550247149760,
			access_hash : 8217921564382057814,
			title : 'p8fzGdS6Zb7tXJuW',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 76,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '72CH6uJcd9ahrGmy',
					reason : 'GeWKC2mt3fpTDAr4',
					text : 'nY87Zda9x3FtTS1H',
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
				until_date : 78,
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
				until_date : 12,
			),
			participants_count : 8,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 88,
			),
			color : $client->peerColor(
				color : 6,
				background_emoji_id : -4755851594807512237,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : -3064685216849099531,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 61,
			subscription_until_date : 38,
			bot_verification_icon : -7664165427234829446,
			send_paid_messages_stars : -1010735533057457888,
			linked_monoforum_id : -9195490509733190077,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 8012595086318204461,
			access_hash : 7311466641778956170,
			title : 'qKj4feCnv7XhRJQc',
			until_date : 17,
		),
	),
	date : 20,
	seq : 8,
);
```