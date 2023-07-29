<script setup>
import Pagination from "../../../Shared/Sub/Pagination.vue";

defineProps({
    cardTitle:String,
    cardDescription:String,
    permissions:Object,
})
</script>

<template>
    <div class="pt-6 px-4">
        <div class="w-full grid grid-cols-1  gap-4">
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                <div class="mb-4 flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{cardTitle}}</h3>
                        <span class="text-base font-normal text-gray-500">{{cardDescription}}</span>
                    </div>
                </div>
                <div class="flex flex-col mt-8">
                    <div class="overflow-x-auto rounded-lg">
                        <div class="align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            #
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Key
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Description
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Feature Group
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Created Date
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                    <tr v-for="(permission, index) in permissions.data" :key="permission.id">
                                        <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                            {{ (permissions.current_page - 1) * permissions.per_page + index + 1 }}
                                        </td>
                                        <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                            {{permission.name}}
                                        </td>
                                        <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                            {{permission.description}}
                                        </td>
                                        <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                            {{permission.feature}}
                                        </td>
                                        <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                            {{$formatDate(permission.created_at)}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <Pagination :links="permissions.links"></Pagination>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
